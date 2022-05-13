<script setup>
    import AppLayout from "@/Layouts/AppLayout"
    import ButtonLink from "@/Components/ButtonLink"
    import Pagination from "@/Components/Pagination"
    import JetDialogModal from "@/Jetstream/DialogModal"
    import JetDangerButton from "@/Jetstream/DangerButton"
    import JetButton from "@/Jetstream/Button"
    import JetSecondaryButton from "@/Jetstream/SecondaryButton"
    import JetInput from "@/Jetstream/Input"
    import { reactive, ref, watch } from "@vue/runtime-core"
    import { InertiaLink, useForm } from "@inertiajs/inertia-vue3"
    import { Inertia } from "@inertiajs/inertia"

    const params = reactive({
        search: route().params.search,
        sort: route().params.sort,
        by: route().params.by
    })

    watch(params, async (newParams, oldParams) => {
        Object.keys(params).forEach(key => {
            if (params[key] == '') {
                delete params[key]
            }
        })

        Inertia.get(route('dashboard.student.index'), params, {
            preserveScroll: true,
            preserveState: true
        })
    })

    const clearParams = () => {
        Object.keys(params).forEach(key => {
            delete params[key]
        })
    }

    const form = useForm({
        file: null
    })

    const file = ref(null)

    const selectFileImport = () => {
        file.value.click()
    }

    const importStudent = () => {
        form.file = file.value.files[0]

        form.post(route('dashboard.student.import'), {
            errorBag: "importStudent",
            preserveScroll: true,
            forceFormData: true,
            onFinish: () => {
                form.reset()
                file.value = null
            }
        })
    }

    const confirmingStudentDeletion = ref(false)
    const selectedStudent = ref(null)

    const confirmStudentDeletion = (student) => {
        confirmingStudentDeletion.value = true

        selectedStudent.value = student
    }

    const closeModal = () => {
        confirmingStudentDeletion.value = false

        selectedStudent.value = null
    }

    const deleteStudent = () => {
        Inertia.delete(route('dashboard.student.destroy', selectedStudent.value))

        confirmingStudentDeletion.value = false

        selectedStudent.value = null
    }

    defineProps({
        students: Object
    })

    const parseDate = (data) => {
        const date = new Date(data)
        return date.toLocaleDateString('id', { year: 'numeric', month: 'long', day: 'numeric' })
    }

</script>

<template>
    <AppLayout title="Student List">
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold leading-tight text-neutral-800">Student List</h2>

                <form @submit.prevent="" method="post" enctype="multipart/form-data">
                    <input class="hidden" hidden type="file" ref="file" @input="importStudent" />
                </form>

                <JetButton type="button" @click.prevent="selectFileImport">Import Data</JetButton>
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto space-y-8 max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <JetInput id="search" placeholder="Search Student" v-model="params.search" type="text" class="block w-full mt-1" autocomplete="search" />
                        <button v-if="params.search" @click="clearParams">Reset</button>
                    </div>
                    <button-link :href="route('dashboard.student.create')">Add Student</button-link>
                </div>
                <table class="min-w-full overflow-hidden divide-y rounded-md shadow divide-neutral-200 dark:divide-neutral-700">
                    <thead class="bg-neutral-50 dark:bg-neutral-800">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-neutral-500 dark:text-neutral-300">No</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-neutral-500 dark:text-neutral-300">Student</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-neutral-500 dark:text-neutral-300">Birth</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-neutral-500 dark:text-neutral-300">NIS</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-neutral-500 dark:text-neutral-300">NISN</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-neutral-500 dark:text-neutral-300">Created At</th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-neutral-200 dark:divide-neutral-800 dark:bg-neutral-900">
                        <tr class="text-center" v-if="students.data.length == 0 && params.search == ''">
                            <td colspan="7" class="px-6 py-4 text-sm text-neutral-500 whitespace-nowrap">No student available</td>
                        </tr>
                        <tr class="text-center" v-if="students.data.length == 0 && params.search != ''">
                            <td colspan="7" class="px-6 py-4 text-sm text-neutral-500 whitespace-nowrap">No result</td>
                        </tr>
                        <tr v-for="(row, index) in students.data" :key="row.id">
                            <td class="px-6 py-4 text-sm whitespace-nowrap text-neutral-900 dark:text-white">
                                {{ index + 1 }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-neutral-900 overflow-ellipsis dark:text-white">
                                    {{ row.auth_data.name }}
                                </div>
                                <div class="overflow-hidden text-sm text-neutral-500">
                                    {{ row.class }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-neutral-900 overflow-ellipsis dark:text-white">
                                    {{ row.place_of_birth ?? "-" }}
                                </div>
                                <div class="overflow-hidden text-sm text-neutral-500">
                                    {{ row.date_of_birth ? parseDate(row.date_of_birth) : "-" }}
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap text-neutral-500">
                                {{ row.nis }}
                            </td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap text-neutral-500">
                                {{ row.nisn ?? "-" }}
                            </td>
                            <td class="px-6 py-4 text-sm text-neutral-500 whitespace-nowrap">
                                {{ row.created_at }}
                            </td>
                            <td class="px-6 py-4 space-x-2 text-sm font-medium text-right whitespace-nowrap">
                                <inertia-link :href="route('dashboard.student.edit', row)" class="inline-flex items-center p-2 space-x-4 text-white transition rounded-full bg-neutral-800 active:hover:scale-90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                    </svg>
                                </inertia-link>
                                <button @click="confirmStudentDeletion(row)" class="inline-flex items-center p-2 space-x-4 text-white transition bg-red-600 rounded-full focus:outline-none active:hover:scale-90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="4" y1="7" x2="20" y2="7"></line>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <pagination :links="students.links" :from="students.from" :to="students.to" :total="students.total" />
            </div>
        </div>
    </AppLayout>

    <!-- Delete Student Confirmation Modal -->
    <JetDialogModal :show="confirmingStudentDeletion" @close="closeModal">
        <template #title> Delete {{ selectedStudent.auth_data.name }} </template>

        <template #content> Are you sure you want to delete this student? Once the student is deleted, all of its resources and data will be permanently deleted. Please re-check if you want to delete this student. </template>

        <template #footer>
            <JetSecondaryButton @click="closeModal"> Cancel </JetSecondaryButton>

            <JetDangerButton class="ml-3" @click="deleteStudent"> Delete Student </JetDangerButton>
        </template>
    </JetDialogModal>
</template>

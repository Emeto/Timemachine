<template>
    <div>
        <div class="flex w-full justify-end items-center">
            <button @click="openTimeMachine = true" class="btn btn-primary btn-default btn-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path class="fill-current" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-8.41l2.54 2.53a1 1 0 0 1-1.42 1.42L11.3 12.7A1 1 0 0 1 11 12V8a1 1 0 0 1 2 0v3.59z"/>
                </svg>
            </button>
            <portal to="modals">
                <transition name="fade">
                    <modal v-if="openTimeMachine" @modal-close="openTimeMachine = false">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden" style="width: 460px;">
                            <div class="p-8">
                                <heading :level="2" class="mb-3">Restore a previous version of this resource</heading>
                                <p class="text-80 mb-6">Select a version among all saved states for this resource to restore this exact state in time.</p>

                                <label class="inline-block mb-2 text-80" for="versions">Versions</label>
                                <select name="versions" id="versions" class="w-full form-control form-select">
                                    <option value="1">2019-04-30 at 09:00:00</option>
                                    <option value="2">2019-04-28 at 11:00:00</option>
                                    <option value="3">2019-04-14 at 15:00:00</option>
                                </select>
                            </div>
                            <div class="border-t border-50 px-6 py-3 ml-auto flex items-center" style="min-height: 70px; flex-direction: row-reverse">
                                <a style="order:2;" @click.prevent="openTimeMachine = false" class="cursor-pointer btn text-80 font-normal px-3 mr-3 btn-link" >Close</a>
                                <button class="btn btn-default btn-primary">Restore</button>
                            </div>
                        </div>
                    </modal>
                </transition>
            </portal>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['resourceName', 'resourceId', 'field'],

        data() {
            return {
                openTimeMachine: false,
            }
        },

        mounted() {

        }
    }
</script>
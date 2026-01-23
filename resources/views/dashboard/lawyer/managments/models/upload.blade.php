<x-dashboard.lawyer.master title="Upload a file">

    <div dir="{{ session()->get('locale') == 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12" >
                <div class="page-title-box d-flex justify-content-between">
                    <h4 class="page-title">{{ __('model.add_model') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form  id="add_model_form" action="{{ route('lawyer.models.upload.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div id="model_options">

                            </div>
                            <div class="tw-grid tw-grid-cols-12 tw-gap-2">
                                <div class="lg:tw-col-span-4 tw-col-span-12">
                                    <div>
                                        <span>{{ __('model.model_name') }}:</span>
                                        <div class="tw-relative tw-mt-1 tw-py-1 tw-duration-300 focus-within:tw-border-blue-500 tw-overflow-hidden tw-w-full tw-h-[40px] tw-py-1 tw-px-2 tw-flex tw-items-center tw- tw-rounded-md tw-border tw-border-solid tw-border-neutral-600">
                                            <input type="text" name="name" id="model_name" class="tw-absolute tw-px-2 tw-py-1 tw-border-transparent focus:tw-border-transparent focus:tw-ring-0 tw-top-0 tw-left-0 tw-bottom-0 tw-right-0 tw-w-full tw-h-full" />
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:tw-col-span-4 tw-col-span-12">
                                    <div>
                                        <span>{{ __('model.category') }}:</span>
                                        <div>
                                            <select name="model_category_id" id="model_category_id" style="border-color: rgba(229, 231, 235, var(--tw-border-opacity))" class="tw-relative tw-mt-1 tw-py-1 tw-duration-300 focus-within:tw-border-blue-500 tw-overflow-hidden tw-w-full tw-h-[40px] tw-py-1 tw-flex tw-items-center tw- tw-rounded-md !tw-border !tw-border-solid !tw-border-neutral-600">

                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:tw-col-span-4 tw-col-span-12">
                                    <div>
                                        <span>{{ __('model.word_file') }}:</span>
                                        <div class="tw-relative tw-mt-1 tw-px-3 tw-w-full tw-h-[40px] tw-overflow-hidden tw-py-1 tw-px-2 tw-flex tw-items-center tw- tw-rounded-md tw-border tw-border-solid tw-border-neutral-600">
                                            <input dir="ltr" type="file" name="word" id="model_word" class=" tw-absolute tw-opacity-0 tw-mt-1 tw-top-0 tw-left-0 tw-bottom-0 tw-right-0 tw-w-full tw-h-full" />
                                            <img id="word_file_icon" src="" class="tw-w-[24px] tw-pointer-events-none tw-hidden" />
                                            <p id="word_file_name" class="tw-mx-3 tw-m-0">{{ __('model.upload_file_here') }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:tw-col-span-4 tw-col-span-12">
                                    <div>
                                        <span>{{ __('model.option_name') }}:</span>
                                        <div class="tw-relative tw-mt-1 tw-py-1 tw-duration-300 focus-within:tw-border-blue-500 tw-overflow-hidden tw-w-full tw-h-[40px] tw-py-1 tw-px-2 tw-flex tw-items-center tw- tw-rounded-md tw-border tw-border-solid tw-border-neutral-600">
                                            <input type="text" name="option_name" id="model_option_name" class="tw-absolute tw-px-2 tw-py-1 tw-border-transparent focus:tw-border-transparent focus:tw-ring-0 tw-top-0 tw-left-0 tw-bottom-0 tw-right-0 tw-w-full tw-h-full" />
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:tw-col-span-4 tw-col-span-12">
                                    <div>
                                        <span>{{ __('model.option_variable') }}:</span>
                                        <div class="tw-relative tw-mt-1 tw-py-1 tw-duration-300 focus-within:tw-border-blue-500 tw-overflow-hidden tw-w-full tw-h-[40px] tw-py-1 tw-px-2 tw-flex tw-items-center tw- tw-rounded-md tw-border tw-border-solid tw-border-neutral-600">
                                            <input type="text" name="option_variable" id="model_option_variable" class="tw-absolute tw-px-2 tw-py-1 tw-border-transparent focus:tw-border-transparent focus:tw-ring-0 tw-top-0 tw-left-0 tw-bottom-0 tw-right-0 tw-w-full tw-h-full" />
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:tw-col-span-3 tw-col-span-12">
                                    <div>
                                        <span>{{ __('model.option_type') }}:</span>
                                        <div>
                                            <select name="type" id="model_option_type" style="border-color: rgba(229, 231, 235, var(--tw-border-opacity))" class="tw-relative tw-mt-1 tw-py-1 tw-duration-300 focus-within:tw-border-blue-500 tw-overflow-hidden tw-w-full tw-h-[40px] tw-py-1 tw-flex tw-items-center tw- tw-rounded-md !tw-border !tw-border-solid !tw-border-neutral-600">
                                                <option value="text">{{ __('model.text') }}</option>
                                                <option value="date">{{ __('model.date') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:tw-col-span-1 tw-col-span-12">
                                    <div class="tw-flex tw-items-end tw-h-full">
                                        <button id="add_option_btn" type="button" class="tw-px-4 tw-border-none tw-outline-none tw-h-[40px] tw-text-white tw-rounded-md tw-bg-[#003582] tw-w-full tw-flex tw-items-center tw-justify-center">
                                            <img src="{{ asset('images/icons/add.svg') }}" class="tw-w-[28px] tw-rounded-lg tw-pointer-events-none" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-mt-5">
                                <p class="tw-text-neutral-700">{{ __('model.options') }}:</p>
                            </div>
                            <div id="added_options" class="tw-mb-5 tw-mt-0 tw-rounded-lg tw-p-4 tw-border tw-border-solid tw-border-neutral-600">

                            </div>

                            <div class="tw-w-full">
                                <div class="tw-flex tw-items-end tw-justify-end tw-h-full ">
                                    <button type="submit" id="submit_model_form" class="tw-bg-green-500 tw-text-white tw-px-6 tw-w-fit tw-border-none tw-outline-none tw-h-[40px] tw-py-2 tw-rounded-md">
                                        {{ __('button.Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div>




    <script>

    let options = [];
    let option_index = 1;

    const add_model_form = document.getElementById("add_model_form");
    const model_options = document.getElementById("model_options");
    const added_options = document.getElementById("added_options");
    const add_option_btn = document.getElementById("add_option_btn");
    const model_option_name = document.getElementById("model_option_name");
    const model_option_variable = document.getElementById("model_option_variable");
    const model_option_type = document.getElementById("model_option_type");
    const model_name = document.getElementById("model_name");
    const model_word = document.getElementById("model_word");
    const word_file_name = document.getElementById("word_file_name");
    const word_file_icon = document.getElementById("word_file_icon");
    const submit_model_form = document.getElementById("submit_model_form");

    add_model_form.addEventListener('submit', e => {

        if (!model_name.value) {
            if (!model_name.parentElement.classList.contains('tw-border-red-400')) {
                model_name.parentElement.classList.add('tw-border-red-400')
            }
            if (model_name.parentElement.classList.contains('tw-border-neutral-600')) {
                model_name.parentElement.classList.remove('tw-border-neutral-600')
            }
        } else {
            if (model_name.parentElement.classList.contains('tw-border-red-400')) {
                model_name.parentElement.classList.remove('tw-border-red-400')
            }
            if (!model_name.parentElement.classList.contains('tw-border-neutral-600')) {
                model_name.parentElement.classList.add('tw-border-neutral-600')
            }

        }
        if (!model_word.value) {
            if (!model_word.parentElement.classList.contains('tw-border-red-400')) {
                model_word.parentElement.classList.add('tw-border-red-400')
            }
            if (model_word.parentElement.classList.contains('tw-border-neutral-600')) {
                model_word.parentElement.classList.remove('tw-border-neutral-600')
            }
        } else {
            if (model_word.parentElement.classList.contains('tw-border-red-400')) {
                model_word.parentElement.classList.remove('tw-border-red-400')
            }
            if (!model_word.parentElement.classList.contains('tw-border-neutral-600')) {
                model_word.parentElement.classList.add('tw-border-neutral-600')
            }
        }

        const l = model_word.value.split('\\');
        const name = l[ l.length > 0 ? (l.length - 1) : 0];
        const ext = name?.split('.')?.slice(-1)[0]

        if(!['doc', 'docx'].includes(ext)) {
            e.preventDefault()
            return false;
        }

        if(!model_word.value || options.length == 0 || !model_name.value) {
            e.preventDefault();
            return false;
        }
    })

    function add_model_option() {

        console.log(!model_option_name.value, !model_option_variable.value);
        if(!model_option_name.value || !model_option_variable.value) {
            return false;
        }

        options.push({
            id: option_index,
            option_name: model_option_name.value,
            option_variable: model_option_variable.value,
            type: model_option_type.value
        })

        let option_id = document.createElement('input');
        option_id.setAttribute('type', 'hidden');
        option_id.setAttribute('name', `options[${option_index}][id]`);
        option_id.setAttribute('value', option_index);

        // Option name
        let option_name = document.createElement('input');
        option_name.setAttribute('type', 'hidden');
        option_name.setAttribute('name', `options[${option_index}][option_name]`);
        option_name.setAttribute('value', model_option_name.value);

        // Option variable
        let option_variable = document.createElement('input');
        option_variable.setAttribute('type', 'hidden');
        option_variable.setAttribute('name', `options[${option_index}][option_variable]`);
        option_variable.setAttribute('value', model_option_variable.value);

        let option_type = document.createElement('input');
        option_type.setAttribute('type', 'hidden');
        option_type.setAttribute('name', `options[${option_index}][type]`);
        option_type.setAttribute('value', model_option_type.value);

        update_options(options)

        add_event_listeners_to_buttons(options)

        model_option_name.value = ''
        model_option_variable.value = ''
        model_option_type.value = 'text'
        console.log('Option Added');
        console.log(options);

        option_index += 1;
    }

    function create_option_element(option_id, option_name, option_variable, option_type) {
        const option_types = {
            "text": "{{ __('model.text') }}",
            "date": "{{ __('model.date') }}",
        }
        const div = `
            <div class="tw-grid tw-grid-cols-12 tw-mt-2 tw-gap-2 ">
                <div class="tw-text-white tw-col-span-12 lg:tw-col-span-4 tw-min-h-[20px] tw-py-2 tw-px-3 tw-bg-indigo-500 tw-rounded-lg">
                    ${option_name}
                </div>
                <div class="tw-text-white tw-col-span-12 lg:tw-col-span-4 tw-min-h-[20px] tw-py-2 tw-px-3 tw-bg-green-500 tw-rounded-lg">
                    ${option_variable}
                </div>
                <div class="tw-text-white tw-col-span-12 lg:tw-col-span-2 tw-min-h-[20px] tw-py-2 tw-px-3 tw-bg-blue-500 tw-rounded-lg">
                    ${option_types[option_type]}
                </div>
                <div class="tw-text-white tw-grid tw-grid-cols-2 tw-col-span-12 tw-gap-2 lg:tw-col-span-2 tw-min-h-[20px] tw-px-3 tw-rounded-lg">
                    <button option_id="${option_id}" type="button" class="update-btn-${option_id} tw-bg-white tw-col-span-1 tw-px-6 tw-w-fit tw-border-none tw-outline-none tw-text-white tw-py-2 tw-rounded-md tw-flex tw-items-center tw-justify-center">
                        <img src="{{ asset('images/icons/edit.svg') }}" class="tw-pointer-events-none" width="22" />
                    </button>
                    <button option_id="${option_id}" type="button" class="delete-btn-${option_id} tw-bg-white tw-col-span-1 tw-px-6 tw-w-fit tw-border-none tw-outline-none tw-text-white tw-py-2 tw-rounded-md tw-flex tw-items-center tw-justify-center">
                            <img src="{{ asset('images/icons/delete.svg') }}" class="tw-pointer-events-none" width="22" />
                    </button>
                </div>
            </div>
        `

        return div
    }

    function update_options(m_options) {
        let ops = ''
        let container = document.createElement('div');

        m_options.forEach(op => {
            ops += create_option_element(op.id, op.option_name, op.option_variable, op.type)

            let option_id = document.createElement('input');
            option_id.setAttribute('type', 'hidden');
            option_id.setAttribute('name', `options[${op.id}][id]`);
            option_id.setAttribute('value', op.id);

            // Option name
            let option_name = document.createElement('input');
            option_name.setAttribute('type', 'hidden');
            option_name.setAttribute('name', `options[${op.id}][option_name]`);
            option_name.setAttribute('value', op.option_name);

            // Option variable
            let option_variable = document.createElement('input');
            option_variable.setAttribute('type', 'hidden');
            option_variable.setAttribute('name', `options[${op.id}][option_variable]`);
            option_variable.setAttribute('value', op.option_variable);

            let option_type = document.createElement('input');
            option_type.setAttribute('type', 'hidden');
            option_type.setAttribute('name', `options[${op.id}][type]`);
            option_type.setAttribute('value', op.type);


            container.append(option_id);
            container.append(option_name);
            container.append(option_variable);
            container.append(option_type);
        })

        model_options.innerHTML = ''
        model_options.append(container)

        added_options.innerHTML = ops
    }

    function add_event_listeners_to_buttons(ops) {
        ops.forEach(o => {
            document.querySelector(`.update-btn-${o.id}`)
            .addEventListener('click', update_option)

            document.querySelector(`.delete-btn-${o.id}`)
            .addEventListener('click', delete_option)
        });
    }

    function delete_option(e) {
        options = options.filter(i => i.id !== parseInt(e.target.getAttribute('option_id')))
        update_options(options)
        add_event_listeners_to_buttons(options)
    }

    function update_option(e) {
        const to_update_option = options.find(i => i.id == parseInt(e.target.getAttribute('option_id')));
        model_option_name.value = to_update_option.option_name
        model_option_variable.value = to_update_option.option_variable
        model_option_type.value = to_update_option.type

        options = options.filter(i => i.id !== parseInt(e.target.getAttribute('option_id')))
        update_options(options)
        add_event_listeners_to_buttons(options)
    }


    add_option_btn.addEventListener('click', add_model_option);
    model_word.addEventListener('change', e => {
        if(!!e.target.value) {

            const l = e.target.value.split('\\');
            const name = l[ l.length > 0 ? (l.length - 1) : 0];
            const ext = name?.split('.')?.slice(-1)[0]
            console.log(ext);
            if(!['doc', 'docx'].includes(ext)) {
                word_file_name.innerHTML = '{{ __('model.file_must_be_word') }}'
                word_file_icon.classList.contains('tw-hidden') ? word_file_icon.classList.remove('tw-hidden') : '' ;
                word_file_icon.src = "{{asset('images/icons/error.svg')}}";
                return false;
            } else {
                word_file_name.innerHTML = name
                word_file_icon.classList.contains('tw-hidden') ? word_file_icon.classList.remove('tw-hidden') : '';
                word_file_icon.src = "{{asset('images/icons/ms-word.svg')}}";
                return false;
            }


        }else {

            word_file_icon.classList.contains('tw-hidden') ? word_file_icon.classList.add('tw-hidden') :'';
        }
    })



    </script>
</x-dashboard.lawyer.master>

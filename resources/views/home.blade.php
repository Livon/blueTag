<!-- View stored in resources/views/index.blade.php -->

<x-layout>
    <x-slot name="css_section">
        <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" />
        <style>
            .customSuggestionsList > div{
                margin-top: 5px;
                max-height: 300px;
                border: 1px solid gray;
                overflow: auto;
            }
        </style>
    </x-slot>

    <x-slot name="title">
        Blue Tag Home
    </x-slot>

    <div class="flex ..." id="app">
        <div class="flex-auto ...">

            <div class="relative overflow-hidden mb-8">
                <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-emerald-50 to-teal-100 p-10 place-items-center">

                    <div class="flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:space-x-4 mb-5">
                        <input name="tags_arr" type="hidden" value="">
                        <form action="" class="flex flex-wrap justify-between md:flex-row w-full">
                            <input value="{{$query->title}}" type="search"
                                   name="title"
                                   placeholder="Search title ..."
                                   class="mr-5 w-1/3 h-12 px-4 text-sm text-gray-700 bg-white border border-gray-300 rounded-lg lg:w-120 xl:transition-all xl:duration-300 xl:w-150 xl:focus:w-150 lg:h-10 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-teal-500 dark:focus:border-teal-500 focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-40">

                            <input class="w-1/3 rounded-md text-sm " alias='tags' value='' placeholder="Search tag ...">
                            <input type="hidden" name="tag" value='{{$query->tag}}'>
                            <button type="submit"
                                    class="flex items-center justify-center h-12 px-4 text-sm text-center text-gray-600 transition-colors duration-200 transform border rounded-lg lg:h-10 dark:text-gray-300 dark:border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                                Go
                            </button>
                        </form>
                    </div>

                    <table class="table-flex w-full">
                        <thead class="bg-green-200">
                        <tr>
                            <th class="px-4 py-2 text-emerald-600">Objects</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($query as $obj)
                            <tr class="hover:bg-yellow-300">
                                <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">
                                    <div class="md:space-x-3" name="tags_in_row">
                                        {{ $obj->tags}}
                                    </div>
                                    <a href="{{ $obj->obj_key}}" target="_blank">{{ $obj->id }}. {{ $obj->title }}</a>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-300 bg-gray-200 rounded-full">{{ $obj->created_at }}</span>
                                    <p class="text-blue-200 text-xs"><a class="hover:text-blue-600" href="{{ $obj->obj_key}}" target="_blank">{{ $obj->obj_key }}</a></p>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="border border-emerald-500 text-emerald-600 font-medium">
                                <div class="p-5 place-items-center bg-green-200">
                                    {{ $query->appends(['title'=>$query->title, 'tag'=>$query->tag])->links() }}
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <div class="flex-auto ...">
            <div class="my-25 flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:space-x-4 mb-5">
                <div class="mt-5">

                </div>

            </div>
        </div>
    </div>



    <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-purple-50 to-purple-100 px-6 py-12">
        <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-md sm:flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-6 sm:py-4">
            <img class="block mx-auto sm:mx-0 sm:flex-shrink-0 h-24 rounded-full" src="https://tailwindcss.com/img/erin-lindford.jpg" alt="Woman's Face">
            <div class="text-center sm:text-left space-y-2">
                <div class="space-y-0.5">
                    <p class="text-lg text-black font-semibold cyxy-trs-source cyxy-trs-source-ted">
                        Erin Lindford
                    </p><p class="text-lg text-black font-semibold cyxy-trs-source cyxy-trs-target">艾琳 · 林德福德</p>
                    <p class="text-gray-500 font-medium cyxy-trs-source cyxy-trs-source-ted">
                        Product Engineer
                    </p><p class="text-gray-500 font-medium cyxy-trs-source cyxy-trs-target">产品工程师</p>
                </div>
                <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 cyxy-trs-source">Message<font class="cyxy-trs-target"> 信息</font></button>
            </div>
        </div>
    </div>

    <div class="p-7 bg-yellow-200">
        <div class="max-w-md mx-auto bg-yellow-200 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://images.unsplash.com/photo-1515711660811-48832a4c6f69?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="Man looking at item at a store">
                </div>
                <div class="p-8  bg-white ">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
                    <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden mb-8">
        <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-purple-50 to-purple-100 p-10">
            <form class="flex w-full max-w-sm mx-auto space-x-3">
                <input
                    class="flex-1 appearance-none border border-transparent w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-md rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="email" placeholder="Your email">
                <button
                    class="flex-shrink-0 bg-purple-600 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200 cyxy-trs-source"
                    type="button">
                    Sign up
                    <font class="cyxy-trs-target"> 注册</font></button>
            </form>
            <div class="text-center m-7">
                <button type="button" class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none cyxy-trs-source" tabindex="-1">
                    2021-08 by Livon</button>
            </div>
        </div>
    </div>


    <x-slot name="js_section">

        <script src="https://unpkg.com/vue@next"></script>
        <script src="https://unpkg.com/@yaireo/tagify"></script>
        <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>

        <script src="{{ asset('js/home1.js') }}"></script>

        <script>

            function setTags(){
                let v = document.querySelector('input[name=tag]').value
                if(!v) return
                tagify.addTags([{ value:1, name:v, email: '',}])
            }

            let whitelist = [
                {
                    "value": 1,
                    "name": "Justinian Hattersley",
                    // "avatar": "https://i.pravatar.cc/80?img=1",
                    "email": "jhattersley0@ucsd.edu"
                },
                {
                    "value": 2,
                    "name": "Antons Esson",
                    // "avatar": "https://i.pravatar.cc/80?img=2",
                    "email": "aesson1@ning.com"
                },
            ]



            let url ='http://bluetag.foteex.com/api/recently-tags'

            fetch(url)
                .then(function(response) {
                    return response.json();
                })
                .then(function(values) {
                    console.log(values);
                    values.forEach(el =>{
                        el.value = el.id
                        el.name = el.tag_value
                        whitelist.push(el)
                    })
                    // tagify.settings.whitelist = values;
                    // whitelist = values;
                    tagify.settings.whitelist = values
                    setTags()
                    // if(!tagify ) tagifyInit(values)
                    // tagify.dropdown.show.call(tagify, value); // render the suggestions dropdown
                    // renderSuggestionsList()
                });


            var inputElm = document.querySelector('input[alias=tags]');

            function tagTemplate(tagData){
                return `
        <tag title="${tagData.email}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="tagify__tag ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div>
                <div class='tagify__tag__avatar-wrap'>
                    <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                </div>
                <span class='tagify__tag-text'>${tagData.name}</span>
            </div>
        </tag>
    `
            }

            function suggestionItemTemplate(tagData){
                return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">
            ${ tagData.avatar ? `
            <div class='tagify__dropdown__item__avatar-wrap'>
                <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
            </div>` : ''
                }
            <strong>${tagData.name}</strong>
            <span>${tagData.email}</span>
        </div>
    `
            }

            // initialize Tagify on the above input node reference
            var tagify = new Tagify(inputElm, {
                tagTextProp: 'name', // very important since a custom template is used with this property as text
                enforceWhitelist: true,
                skipInvalid: true, // do not remporarily add invalid tags
                dropdown: {
                    closeOnSelect: false,
                    enabled: 0,
                    classname: 'users-list',
                    searchKeys: ['name', 'email']  // very important to set by which keys to search for suggesttions when typing
                },
                templates: {
                    tag: tagTemplate,
                    dropdownItem: suggestionItemTemplate
                },
                whitelist: whitelist
            })

            tagify.on('dropdown:show dropdown:updated', onDropdownShow)
            tagify.on('dropdown:select', onSelectSuggestion)

            tagify.on('add', function(e){
                console.log( "original Input:", tagify.DOM.originalInput);
                console.log( "original Input's value:", tagify.DOM.originalInput.value);
                console.log( "event detail:", e.detail);
                console.log( tagify.value );
                let tags_value = []
                tagify.value.forEach(el =>{
                    tags_value.push({
                        id: el.id,
                        value: el.tag_value
                    })
                })

                document.querySelector('input[name=tag]').value = e.detail.data.name;

            });

            tagify.on('remove', function(e){
                document.querySelector('input[name=tag]').value = '';

            });

            var addAllSuggestionsElm;

            function onDropdownShow(e){
                var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

                if( tagify.suggestedListItems.length > 1 ){
                    addAllSuggestionsElm = getAddAllSuggestionsElm();

                    // insert "addAllSuggestionsElm" as the first element in the suggestions list
                    dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
                }
            }

            function onSelectSuggestion(e){
                if( e.detail.elm == addAllSuggestionsElm )
                    tagify.dropdown.selectAll();
            }

            // create a "add all" custom suggestion element every time the dropdown changes
            function getAddAllSuggestionsElm(){
                // suggestions items should be based on "dropdownItem" template
                return tagify.parseTemplate('dropdownItem', [{
                        class: "addAll",
                        name: "Add all",
                        email: tagify.whitelist.reduce(function(remainingSuggestions, item){
                            return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
                        }, 0) + " Members"
                    }]
                )
            }

            // let input = document.querySelector('input[name=tags-manual-suggestions]')
            // // init Tagify script on the above inputs
            // var tagify = new Tagify(input, {
            //     whitelist : ["A# .NET", "A# (Axiom)", "A-0 System", "A+", "A++", "ABAP", "ABC", "ABC ALGOL", "ABSET", "ABSYS", "ACC", "Accent", "Ace DASL", "ACL2", "Avicsoft", "ACT-III", "Action!", "ActionScript", "Ada", "Adenine", "Agda", "Agilent VEE", "Agora", "AIMMS", "Alef", "ALF", "ALGOL 58", "ALGOL 60", "ALGOL 68", "ALGOL W", "Alice", "Alma-0", "AmbientTalk", "Amiga E", "AMOS", "AMPL", "Apex (Salesforce.com)", "APL", "AppleScript", "Arc", "ARexx", "Argus", "AspectJ", "Assembly language", "ATS", "Ateji PX", "AutoHotkey", "Autocoder", "AutoIt", "AutoLISP / Visual LISP", "Averest", "AWK", "Axum", "Active Server Pages", "ASP.NET", "B", "Babbage", "Bash", "BASIC", "bc", "BCPL", "BeanShell", "Batch (Windows/Dos)", "Bertrand", "BETA", "Bigwig", "Bistro", "BitC", "BLISS", "Blockly", "BlooP", "Blue", "Boo", "Boomerang", "Bourne shell (including bash and ksh)", "BREW", "BPEL", "B", "C--", "C++ – ISO/IEC 14882", "C# – ISO/IEC 23270", "C/AL", "Caché ObjectScript", "C Shell", "Caml", "Cayenne", "CDuce", "Cecil", "Cesil", "Céu", "Ceylon", "CFEngine", "CFML", "Cg", "Ch", "Chapel", "Charity", "Charm", "Chef", "CHILL", "CHIP-8", "chomski", "ChucK", "CICS", "Cilk", "Citrine (programming language)", "CL (IBM)", "Claire", "Clarion", "Clean", "Clipper", "CLIPS", "CLIST", "Clojure", "CLU", "CMS-2", "COBOL – ISO/IEC 1989", "CobolScript – COBOL Scripting language", "Cobra", "CODE", "CoffeeScript", "ColdFusion", "COMAL", "Combined Programming Language (CPL)", "COMIT", "Common Intermediate Language (CIL)", "Common Lisp (also known as CL)", "COMPASS", "Component Pascal", "Constraint Handling Rules (CHR)", "COMTRAN", "Converge", "Cool", "Coq", "Coral 66", "Corn", "CorVision", "COWSEL", "CPL", "CPL", "Cryptol", "csh", "Csound", "CSP", "CUDA", "Curl", "Curry", "Cybil", "Cyclone", "Cython", "Java", "Javascript", "M2001", "M4", "M#", "Machine code", "MAD (Michigan Algorithm Decoder)", "MAD/I", "Magik", "Magma", "make", "Maple", "MAPPER now part of BIS", "MARK-IV now VISION:BUILDER", "Mary", "MASM Microsoft Assembly x86", "MATH-MATIC", "Mathematica", "MATLAB", "Maxima (see also Macsyma)", "Max (Max Msp – Graphical Programming Environment)", "Maya (MEL)", "MDL", "Mercury", "Mesa", "Metafont", "Microcode", "MicroScript", "MIIS", "Milk (programming language)", "MIMIC", "Mirah", "Miranda", "MIVA Script", "ML", "Model 204", "Modelica", "Modula", "Modula-2", "Modula-3", "Mohol", "MOO", "Mortran", "Mouse", "MPD", "Mathcad", "MSIL – deprecated name for CIL", "MSL", "MUMPS", "Mystic Programming L"],
            //     dropdown: {
            //         position: "manual",
            //         maxItems: Infinity,
            //         enabled: 0,
            //         classname: "customSuggestionsList"
            //     },
            //     // enforceWhitelist: true
            // })
            //
            // tagify.on("dropdown:show", onSuggestionsListUpdate)
            //     .on("dropdown:hide", onSuggestionsListHide)
            //     .on('dropdown:scroll', onDropdownScroll)
            //     .on('input', onInput)
            //     .on('add', onAdd)
            //
            //
            // renderSuggestionsList()
            //
            // function onAdd(e){
            //     // console.log(e)
            //     // console.log(tagify.value)
            //     let arr_tags = []
            //     tagify.value.forEach(el =>{
            //         arr_tags.push(el.value)
            //     })
            //     document.querySelector('input[name=tags]').value = arr_tags.join(',')
            //     // console.log( arr_tags.join(',') )
            //     // console.log( document.querySelector('input[name=tags]').value )
            // }
            //
            // function fetch_tags(){
            //
            // }
            //
            //
            // function onInput(e){
            //     console.log(e)
            //     let val = e.detail.value // 输入内容
            //     console.log(tagify)
            //
            //     let url ='http://bluetag.foteex.com/api/recently-tags'
            //
            //     fetch(url)
            //         .then(function(response) {
            //             return response.json();
            //         })
            //         .then(function(values) {
            //             console.log(values);
            //             values.forEach(el =>{
            //                 el.value = el.tag_value
            //             })
            //             tagify.settings.whitelist = values;
            //             // tagify.dropdown.show.call(tagify, value); // render the suggestions dropdown
            //             renderSuggestionsList()
            //         });
            //
            // }
            //
            // // ES2015 argument destructuring
            // function onSuggestionsListUpdate({ detail:suggestionsElm }){
            //     console.log(  suggestionsElm  )
            // }
            //
            // function onSuggestionsListHide(){
            //     console.log("hide dropdown")
            // }
            //
            // function onDropdownScroll(e){
            //     console.log(e.detail)
            // }
            //
            // // https://developer.mozilla.org/en-US/docs/Web/API/Element/insertAdjacentElement
            // function renderSuggestionsList(){
            //     tagify.dropdown.show() // load the list
            //     tagify.DOM.scope.parentNode.appendChild(tagify.DOM.dropdown)
            // }


            {{--const app = Vue.createApp({--}}
            {{--    data() {--}}
            {{--        return {--}}
            {{--            count: 1,--}}
            {{--            tagify: tagify,--}}
            {{--        }--}}
            {{--    },--}}
            {{--    methods: {--}}
            {{--    },--}}
            {{--    mounted() {--}}
            {{--        // `this` 指向 vm 实例--}}
            {{--        console.log('count is: ' + this.count) // => "count is: 1"--}}

            {{--        let tags = '{{$query->tags}}'--}}
            {{--        let arr = tags.split(',')--}}
            {{--        console.log( arr )--}}

            {{--        if(!arr) return--}}
            {{--        tagify.addTags(arr)--}}

            {{--        // $.each(arr, (i,el)=>{--}}
            {{--        //     console.log(el)--}}
            {{--        //     tagify.addTags({value:el}) // 添加 tag--}}
            {{--        // })--}}
            {{--    }--}}
            {{--})--}}

            {{--app.mount('#app')--}}



            let row = document.querySelectorAll('div[name=tags_in_row]')
            console.log(row)
            row.forEach(el =>{
                let txt = el.innerText
                let btns = ''
                let colors = ['bg-yellow-400', 'bg-purple-600', 'bg-green-400']
                txt.split(',').forEach((el, i) =>{
                    btns += '<button class="text-xs px-1 text-white rounded-md '+ colors[i%3] +' shadow-lg block md:inline-block">'+ el +'</button>'
                })
                console.log(txt)
                el.innerHTML = btns
                console.log(el.innerHTML)
            })

            {{--<div class="md:space-x-3" name="tags_in_row">--}}
            {{--<button class="text-xs p-1 text-white rounded-md bg-red-500 shadow-lg block md:inline-block">BUTTON</button>--}}
            {{--<button class="py-3 px-6 text-white rounded-lg bg-yellow-400 shadow-lg block md:inline-block">BUTTON</button>--}}
            {{--<button class="py-3 px-6 text-white rounded-lg bg-purple-600 shadow-lg block md:inline-block">BUTTON</button>--}}
            {{--<button class="py-3 px-6 text-white rounded-lg bg-green-400 shadow-lg block md:inline-block">BUTTON</button>--}}
            {{--</div>--}}

            {{--<p>{{ $obj->tags_arr}}</p>--}}





        </script>
    </x-slot>

</x-layout>

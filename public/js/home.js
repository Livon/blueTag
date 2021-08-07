
// let whitelist = []

// let tagify = null

function getTags(){

    let url ='http://bluetag.foteex.com/api/recently-tags'

    fetch(url)
        .then(function(response) {
            return response.json();
        })
        .then(function(values) {
            console.log(values);
            values.forEach(el =>{
                el.value = el.tag_value
            })
            // tagify.settings.whitelist = values;
            whitelist = values;
            // if(!tagify ) tagifyInit(values)
            // tagify.dropdown.show.call(tagify, value); // render the suggestions dropdown
            // renderSuggestionsList()
        });
}



// getTags()
// console.log(whitelist);


let whitelist = [
    { value:'Afghanistan', code1:'AF' },
    { value:'Åland Islands', code1:'AX' },
    { value:'Zimbabwe', code1:'ZW' }
]

var tagify = new Tagify(document.querySelector('input[name=tags]'), {
    delimiters : null,
    templates : {
        tag : function(tagData){
            try{
                // _ESCAPE_START_
                return `<tag title='${tagData.value}' contenteditable='false' spellcheck="false" class='tagify__tag ${tagData.class ? tagData.class : ""}' ${this.getAttributes(tagData)}>
                        <x title='remove tag' class='tagify__tag__removeBtn'></x>
                        <div>
                            ${tagData.code ?
                    `<img onerror="this.style.visibility = 'hidden'" src='https://lipis.github.io/flag-icon-css/flags/4x3/${tagData.code.toLowerCase()}.svg'>` : ''
                }
                            <span class='tagify__tag-text'>${tagData.value}</span>
                        </div>
                    </tag>`
                // _ESCAPE_END_
            }
            catch(err){}
        },

        dropdownItem : function(tagData){
            try{
                // _ESCAPE_START_
                return `<div class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'>
                            <img onerror="this.style.visibility = 'hidden'"
                                 src='https://lipis.github.io/flag-icon-css/flags/4x3/${tagData.code.toLowerCase()}.svg'>
                            <span>${tagData.value}</span>
                        </div>`
                // _ESCAPE_END_
            }
            catch(err){}
        }
    },
    enforceWhitelist : true,
    whitelist : [
        { value:'Afghanistan', code1:'AF' },
        { value:'Åland Islands', code1:'AX' },
        { value:'Zimbabwe', code1:'ZW' }
    ],
    dropdown : {
        enabled: 1, // suggest tags after a single character input
        classname : 'extra-properties' // custom class for the suggestions dropdown
    } // map tags' values to this property name, so this property will be the actual value and not the printed value on the screen
})

tagify.on('click', function(e){
    console.log(e.detail);
});

tagify.on('remove', function(e){
    console.log(e.detail);
});

tagify.on('add', function(e){
    console.log( "original Input:", tagify.DOM.originalInput);
    console.log( "original Input's value:", tagify.DOM.originalInput.value);
    console.log( "event detail:", e.detail);
});

// add the first 2 tags and makes them readonly
var tagsToAdd = tagify.settings.whitelist.slice(0, 1)
// tagify.addTags(tagsToAdd)


//
// tagifyInit(whitelist)
//
// function tagifyInit(whitelist) {
//
//     tagify = new Tagify(document.querySelector('input[name=tags]'), {
//         delimiters : null,
//         templates : {
//             tag : function(tagData){
//                 try{
//                     return `<tag title='${tagData.value}' contenteditable='false' spellcheck="false" class='tagify__tag ${tagData.class ? tagData.class : ""}' ${this.getAttributes(tagData)}>
//                         <x title='remove tag' class='tagify__tag__removeBtn'></x>
//                         <div>
//                             <span class='tagify__tag-text'>${tagData.value}</span>
//                         </div>
//                     </tag>`
//                 }
//                 catch(err){}
//             },
//
//             dropdownItem : function(tagData){
//                 try{
//                     return `<div class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}' tagifySuggestionIdx="${tagData.tagifySuggestionIdx}">
//                             <img onerror="this.style.visibility = 'hidden'"
//                                 src='https://lipis.github.io/flag-icon-css/flags/4x3/${tagData.code.toLowerCase()}.svg'>
//                             <span>${tagData.value}</span>
//                         </div>`
//                 }
//                 catch(err){}
//             }
//         },
//         // enforceWhitelist : true,
//         // whitelist : [],
//         whitelist : whitelist,
//         dropdown : {
//             enabled: 1, // suggest tags after a single character input
//             classname : 'extra-properties' // custom class for the suggestions dropdown
//         } // map tags' values to this property name, so this property will be the actual value and not the printed value on the screen
//     })
//
// // function renderSuggestionsList(){
// //     tagify.dropdown.show() // load the list
// //     tagify.DOM.scope.parentNode.appendChild(tagify.DOM.dropdown)
// // }
//
//
//
// // tagify.on('input', function(e){
// //     getTags()
// // });
//
//     tagify.on('click', function(e){
//         console.log(e.detail);
//     });
//
//     tagify.on('remove', function(e){
//         console.log(e.detail);
//     });
//
//     tagify.on('add', function(e){
//         console.log( "original Input:", tagify.DOM.originalInput);
//         console.log( "original Input's value:", tagify.DOM.originalInput.value);
//         console.log( "event detail:", e.detail);
//     });
//
// // add the first 2 tags and makes them readonly
// //     var tagsToAdd = tagify.whitelist.slice(0, 2)
// //     tagify.addTags(tagsToAdd)
// }




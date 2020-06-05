let candidatesContainer                  = document.getElementById("candidates-container");
let candidatesCollectionReference = [];


let jobCandidates = function() {
           
    Ajax.getJSON(`candidates/fetchCandidatesByUser`, function(collection) {
        
        candidatesCollectionReference = collection;
        renderJobCandidates(candidatesCollectionReference);
       
    });    
};

let renderJobCandidates = function(collection) {

    let templateCollection = [];
    for(let $index = 0; $index < collection.length; $index++) {
        
        let element = collection[$index];
        let template = 
        
        `<div class="mt-3">
        <div class="container">
        <div class="row">
        <div class="col-sm">
                                  
         <div class="position">${element.position}</div> 
          <div class="company">${element.company}</div> 
          <div class="status">${element.status}</div>
          <div class="jobid">JobID:${element.job_id}</div>
          </div>
          </div>
          </div>
          </div>
         </div>`;
        templateCollection.push(template);
    
    
    candidatesContainer.innerHTML = templateCollection.join('');
    }
    
};
jobCandidates();
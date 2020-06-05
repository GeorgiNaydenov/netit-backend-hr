let contentContainer           = document.getElementById("content");
let postCollection             = []; 
let objectCollection           = { postCollection : [] };
let contentFullView            = document.getElementById("content-fullview");
let contentFullViewJobpost     = document.getElementById("content-fullview-jobpost");
let applyJob                   = document.getElementById("applyjob");
let jobId                      = document.getElementById("job_id");
let jobPosition                = document.getElementById("job_position");
let jobIndustry                = document.getElementById("industry");
let jobCompany                 = document.getElementById("company");
let jobCity                    = document.getElementById("city");
let jobDescription             = document.getElementById("description");

applyJob.style.display = 'none';

let renderFullView = function(postId) {
    
    Ajax.getJSON(`posts/index/${postId}`, function(element) {
        
        contentFullView.style.display       = "block";
        jobId.innerHTML                     = element[0].id;
        jobPosition.innerHTML               = element[0].position;
        jobCity.innerHTML                   = element[0].city;
        jobCompany.innerHTML                = element[0].company;
        jobDescription.innerHTML            = element[0].description;
        contentContainer.style.display      = 'none';
        applyJob.style.display              = 'block';
        
  
    });
};

applyJob.addEventListener('click', function(e) {
    
    let postId = jobId.innerHTML;
    console.log(jobId.innerHTML);
    Ajax.getJSON(`posts/applyJob/?id=${postId}`, function(data) {
     renderFullView(postId);   
    });
});
   

let renderJobPost = function(collection) {
    
    for(let $index = 0; $index < collection.length; $index ++) {
        let element = collection[$index];
        let template =`
                       
                       <div class='job-post'>
                       <div class='job-id'>${element.id}</div>
                       <div class='job-position'>${element.position}</div>
                       <div class='job-city'>${element.city}</div>
                       <div class='job-company'>${element.company}</div>
                       <button onclick="renderFullView(${element.id})"> Read </button>
                       </div>
                       
                          `;
       
        postCollection.push(template);
    }
    
    let postTemplate = postCollection.join('');
    contentContainer.innerHTML = postTemplate;
    
    
};



Ajax.getJSON("posts", function(collection) {
    renderJobPost(collection);
}, function() {
    console.log("GET error")
    console.log(error);            
});



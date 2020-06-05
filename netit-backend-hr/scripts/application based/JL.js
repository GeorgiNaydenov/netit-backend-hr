//Job listing, simplifying the name//

let postContainer                        = document.getElementById("post-container");
let candidatesContainer                  = document.getElementById("candidates-container");

let candidateMessageInput                = document.getElementById("candidate-message");
let candidateMessageButton               = document.getElementById("candidate-massege-button");
let candidatesStatusEditor               = document.getElementById("candidateStatusEditor");
let candidateStatusSubmit                = document.getElementById("candidateStatusSubmit");  
let candidatesCollectionReference = [];
let candidatesOptionReference = [];
let postCollectionReference = [];
let candidatesStatusReference = [];

candidatesStatusEditor.style.display = 'none';
candidateMessageInput.style.display = 'none';
candidateMessageButton.style.display = 'none';
candidateStatusSubmit.style.display = 'none';

let renderPost = function() {
    
    Ajax.getJSON('posts/getJobsByCompany', function(collection) {
        
        postCollectionReference = collection;
        renderPostContainer(postCollectionReference);
       
    });  
  
};


let renderPostContainer = function(collection) {

    let templateCollection = [];
      
    for(let $index = 0; $index < collection.length; $index++) {
        
       
        let element = collection[$index];
        let template = `<div class="mt-3">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm">
                                  <div>ID:${element.id}</div> 
                                  <div>Position:${element.position}</div> 
                                  <div>Industry:${element.industry}</div> 
                                  <div>City:${element.city}</div>
                                  <div>Company:${element.company}</div>
                                  <div>Description:${element.description}</div> 
                                </div>
                                </div>
                              <div class="row"> 
                                <div class="col-sm">    
                                    <button class="btn btn-danger" onclick="jobCandidates(${element.id})">Candidates</button>
                                </div>                           
                              </div>  
                            </div>
                        </div>`;
       
        templateCollection.push(template);
 
       }
        postContainer.innerHTML = templateCollection.join('');

};
renderPost();

let jobCandidates = function(index) {
          
    Ajax.getJSON(`candidates/index/${index}`, function(collection) {
  
        candidatesCollectionReference = collection;
        renderJobCandidates(candidatesCollectionReference);
      
     });
 
};

let renderJobCandidates = function(collection) {
 
   
    let templateCollection = [];
    for(let $index = 0; $index < collection.length; $index++) {
        
        let element = collection[$index];
        let template = `<div class="mt-3">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm">
                                  <div>First name:${element.fname}</div> 
                                  <div>Last name:${element.lname}</div> 
                                  <div>City:${element.city}</div>
                                  <div>Age:${element.age}</div>
                                  <div>Education:${element.education}</div> 
                                  <div>JobID:${element.job_id}</div>
                                  <div>Status:${element.status}</div>  
                                  <div>UserID:${element.user_id}</div>  
                                  
                                <button class="btn btn-danger" onclick="renderStatuses(${element.id})">Edit Status</button>
                                <button class="btn btn-primary" onclick="renderMessage(${element.user_id})">Message</button>
                                <button class="btn btn-danger" onclick="deleteCandidate(${element.id})">Delete</button>
                                </div>
                              </div>
                            </div>
                        </div>`;

     templateCollection.push(template); 
     candidatesContainer.innerHTML = templateCollection;

        }
  
};

 let renderStatuses = function(index){
   candidatesContainer.style.display = 'none';
   candidatesStatusEditor.style.display = 'inline-block';
   candidateStatusSubmit.style.display = 'inline-block'
   
    Ajax.getJSON(`candidates/listStatus`, function(collection) {
        let templateCollection = [];
    
    for(let $index = 0; $index < collection.length; $index ++) {
         let element = collection[$index];
         let template = `<option name = "statusOption"  value="${element.status}">${element.status}</option>`;

     templateCollection.push(template);
    candidatesStatusEditor.innerHTML = templateCollection.join('');
 
    } 
    });
    Ajax.getJSON(`candidates/index/${index}`, function(collection) {
     
    let  templateSubmit = []; 
    let templateStatusSubmit = `<button class="btn btn-primary" onclick="editStatusCandidate(${index})">Submit</button>`;
    templateSubmit.push(templateStatusSubmit);
    candidateStatusSubmit.innerHTML = templateSubmit;
     
 });
    
 }


let editStatusCandidate = function(index){
   candidatesContainer.style.display = 'none';
   candidatesStatusEditor.style.display = 'inline-block';
   candidateStatusSubmit.style.display = 'inline-block'
  let status = candidateStatusEditor.value;
  
    Ajax.post(`candidates/updateStatus/?id=${index}&status=${status}`, function() {
       
    });  
    
};



let renderMessage = function(index){
   candidatesContainer.style.display = 'none';
   candidatesStatusEditor.style.display ='none';
   candidateMessageInput.style.display = 'block';
   candidateMessageButton.style.display = 'block'; 
   
   Ajax.getJSON(`candidates/index/${index}`, function(collection) {
    let templateMessage = [];
    let templateMessageSend = `<button class="btn btn-primary" onclick="sendMessage(${index})">Send</button>`;
    templateMessage.push(templateMessageSend);
    candidateMessageButton.innerHTML = templateMessage;
});
     
};
 
let sendMessage = function(index){
          
        let message = candidateMessageInput.value;
        Ajax.post(`candidates/message/?id=${index}&message=${message}`, function(){
        
     });
    };
    
 let deleteCandidate = function(index) {
     Ajax.post(`candidates/delete/${index}`, function(){
        
     });
 };
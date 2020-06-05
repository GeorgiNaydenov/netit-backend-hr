(function() {

    let requestTransform =function(requestBody) {

        let transformCollection = [];
        for(let index in requestBody) {
            transformCollection.push(`${index}=${requestBody[index]}`);
        }

        return transformCollection.join('&');
    };
    
    let baseUrlTransform = function(url) {
        
        let urlElementCollection = url.split("/");
        let endpoint    = urlElementCollection[0];
        let method      = urlElementCollection[1] || 'index';
        let requestId   = urlElementCollection[2] || null;
        
        let queryParameterCollection  = url.split("/?");
        let queryParameter = queryParameterCollection[1];
        
        if(queryParameter) {
            return `http://localhost/MonsterHR/_routes.php?endpoint=${endpoint}&method=${method}&${queryParameter}`;
        }
        
        
        if(requestId) {
            return `http://localhost/MonsterHR/_routes.php?endpoint=${endpoint}&method=${method}&id=${requestId}`;
        }
        return `http://localhost/MonsterHR/_routes.php?endpoint=${endpoint}&method=${method}`;
        
        
    };
    
    let ajaxHelper = function(url, requestObject, isJSONRequest, callbackSuccess, callbackError ) {

        // cat send request to the server
        let xmlHttpRequest  = new XMLHttpRequest();
        let requestMethod   = (requestObject) ? "POST" : "GET";
        let isJSONRequest   = isJSONRequest || false;
        
        let url             = baseUrlTransform(url);
        let requestObject   = requestTransform(requestObject);
        
        xmlHttpRequest.open(requestMethod, url);
        //xmlHttpRequest.setRequestHeader('Content-Type', 'application/json');  
        xmlHttpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xmlHttpRequest.send(requestObject);

        xmlHttpRequest.onreadystatechange = function() {


           let statusGroup                  = ((this.status).toString())[0];

           let HTTPStatus = {
               SUCCESS  : (statusGroup == 2),
               FAIL     : (statusGroup == 4 || statusGroup == 5)
           };

           let isHTTPRequestProccesed       = (this.readyState == xmlHttpRequest.DONE);
           let isHTTPRequestSuccessful      = isHTTPRequestProccesed && HTTPStatus.SUCCESS;
           let isHTTPRequestFailed          = isHTTPRequestProccesed && HTTPStatus.FAIL;

           if(isHTTPRequestProccesed) {
               let responseObject           = isJSONRequest ? JSON.parse(this.responseText) : this.responseText;
           }

           if(isHTTPRequestSuccessful)   {
              return callbackSuccess(responseObject);
           }

           if(isHTTPRequestFailed)       {
              return callbackError(responseObject);
           }
        };
    };

    window.Ajax = {
        get : function(url, successCallback, errorCallback) {
            return ajaxHelper(url, null, false, successCallback, errorCallback)
        },
        
        getJSON : function(url, successCallback, errorCallback) {
            return ajaxHelper(url, null, true, successCallback, errorCallback)
        },        

        post : function(url, body, successCallback, errorCallback) {
            return ajaxHelper(url, body, false, successCallback, errorCallback)
        },      
        
        postJSON : function(url, body, successCallback, errorCallback) {
            return ajaxHelper(url, body, true, successCallback, errorCallback)
        }              
    };
})();
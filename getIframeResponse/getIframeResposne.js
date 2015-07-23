function getIframeResponseText(iframe) {
    var res;
    if(iframe.contentDocument && iframe.contentDocument.defaultView) {
        res = iframe.contentDocument.defaultView.document.body.innerHTML;
    }
    else {
        res = iframe.contentWindow.document.body.innerHTML;
    }
    return res;
}
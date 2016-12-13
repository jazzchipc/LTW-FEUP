function validateTitle(titleDOM, titleMessageDOM)
{
    var title = $(titleDOM).val();
    if(title.length > 30 || title.length <= 0)
    {
        $(titleMessageDOMmessage).text = "Title cannot exceed 30 characters and must exist.";
        return false;
    }
    
    titleMessageDOMmessage.innerHTML = "";
    return true;
}

function validateText(textDOM, textMessageDOM)
{
    var text = $(textDOM).val();
    if(title.length > 300 || title.length <= 0)
    {
        $(textMessageDOM).text = "Text cannot exceed 300 characters and must exist.";
        return false;
    }
    
    $(textMessageDOM).text = "";
    return true;
}
function view_div(id) {
    var el = document.getElementById(id);
    var link = document.getElementById('toggleLink');
    if (el.style.display == "block") 
    {
        el.style.display = "none";
        link.innerText = link.getAttribute('data-text-hide');
    } 
    else 
    {
        el.style.display = "block";
        link.innerText = link.getAttribute('data-text-show');
    }
}

function viewdiv(id,id2) {
    var el = document.getElementById(id);
	var link = document.getElementById(id2);

    if (el.style.display == "block") 
    {
        el.style.display = "none";
        link.innerText = link.getAttribute('reestr-text-hide');
    } 
    else 
    {
        el.style.display = "block";
        link.innerText = link.getAttribute('reestr-text-show');
    }
}

function changeImage(id3)
{
	element=document.getElementById(id3)

	if (element.src.match("hide_ico"))
	{
		element.src="./images/open_ico.png";
	}
	else
	{
		element.src="./images/hide_ico.png";
	}
}
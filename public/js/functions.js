function toggleClass(element, className){
    if (!element || !className){
        return;
    }
    
    var classString = element[0].className;
    var nameIndex = classString.indexOf(className);

    if (nameIndex == -1) {
        classString += ' ' + className;
    }
    else {
        classString = classString.substr(0, nameIndex) + classString.substr(nameIndex+className.length);
    }
    element[0].className = classString;
}

function openMenu(){
    toggleClass(document.getElementsByClassName('nav-toggle'), ' is-active');
    toggleClass(document.getElementsByClassName('nav-menu'), ' is-active');
}
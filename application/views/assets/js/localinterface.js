
function base_url(){
    pathArray = window.location.pathname.split( '/' );
    indexOfSegment = pathArray.indexOf('index.php');
    return window.location.origin + pathArray.slice(0,indexOfSegment).join('/') + '/';
}
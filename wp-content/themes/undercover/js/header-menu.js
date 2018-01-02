var toggled = 0;
var services = [];

var children = document.getElementById("services-list").children;
for (var i = 0, len = children.length ; i < len; i++) {
    services.push(children[i].id);
}
document.getElementById(services[0] + "_container").classList.toggle("content-off");
document.getElementById(services[0]).classList.toggle("service-text-toggled");

function toggle_menu() {
    document.getElementById("toggle_symbol").classList.toggle("fa-bars");
    document.getElementById("toggle_symbol").classList.toggle("fa-close");
    document.getElementById("menu_id").classList.toggle("menu_toggled_off");
    if(toggled === 0) {
        toggled = 1; 
        toggle_menu_items();
    } else if(toggled === 1) {
        toggled = 0;
        toggle_menu_items();
    }
}
function toggle_menu_items() {
    document.getElementById("menu_items").classList.toggle("menu_items_off");
}

function toggle_service(obj) {
    
    var target_id = obj.id;
    var target_obj = document.getElementById(target_id);
    
    for(var i=0; i<services.length; i++) {
        if(services[i] === target_id) {
            if(! target_obj.classList.contains("service-text-toggled")) {
                target_obj.classList.toggle("service-text-toggled");
            }
        } else if (document.getElementById(services[i]).classList.contains("service-text-toggled")) {
            document.getElementById(services[i]).classList.toggle("service-text-toggled");
        }
    }    
    
    var target_container_id = target_id + "_container"; 
    var target_obj = document.getElementById(target_container_id);
    
    for(var i=0; i<services.length; i++) {
        if(services[i] + "_container" === target_container_id) {
            if (target_obj.classList.contains("content-off")) {
                target_obj.classList.toggle("content-off");
            }
        } else {
            if(!document.getElementById(services[i] + "_container").classList.contains("content-off")) {
                document.getElementById(services[i] + "_container").classList.toggle("content-off");
            }
        }
    } 
}
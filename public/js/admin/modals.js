//Delete Admins in the role administrator
function deleteItem(userId) {
    id = $(".hidden_admin_id_" + userId).text();
    window.location.href = "/administrator/admins/" +  id;
}

//Delete Moderators in the role administrator
function deleteAdminMod(moderatorId) {
    id = $(".hidden_admin_mod_id_" + moderatorId).text();
    window.location.href = "/administrator/moderator/" +  id;
}

//Delete Users in the role administrator
function deleteAdminUser(AdminuserId) {
    id = $(".hidden_admin_user_id_" + AdminuserId).text();
    window.location.href = "/administrator/user/" +  id;
}

//Delete Users in the role moderator
function deleteModeratorAdm(ModeratoruserId) {
    id = $(".hidden_moderator_adm_id_" + ModeratoruserId).text();
    window.location.href = "/moderator/user/" +  id;
}
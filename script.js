
$(document).ready(function() {
    // Mobile menu toggle
    $("#mobileMenuToggle").click(function() {
        $("#mainNav").toggleClass("active");
        $(this).find("i").toggleClass("fa-bars fa-times");
    });

    // Close mobile menu when clicking a link
    $("#mainNav a").click(function() {
        if ($(window).width() <= 991) {
            $("#mainNav").removeClass("active");
            $("#mobileMenuToggle").find("i").removeClass("fa-times").addClass("fa-bars");
        }
    });

    // Close mobile menu when clicking outside
    $(document).click(function(event) {
        if (!$(event.target).closest('#mainNav, #mobileMenuToggle').length) {
            if ($("#mainNav").hasClass("active")) {
                $("#mainNav").removeClass("active");
                $("#mobileMenuToggle").find("i").removeClass("fa-times").addClass("fa-bars");
            }
        }
    });

    $("#loginButton").click(() => {
        // Show the login form as a popup
        $("#overlayLogin").show();
        $("#loginPopup").show();
    });

    $("#closePopup").click(() => {
        $("#overlay").hide();
        $("#loginPopup").hide();
    });

    $("#overlayLogin").click(() => {
        $("#overlayLogin").hide();
        $("#loginPopup").hide();
    })

    $("#loginForm").submit(function(event) {
        event.preventDefault();

        // Gather user input
        var username = $("#username").val();
        var password = $("#password").val();

        // Validate credentials using AJAX
        $.ajax({
            type: "POST",
            url: "validate_login.php",
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                if (response === "success") {
                    // Redirect to dashboard
                    window.location.href = "dashboard.php";
                } else {
                    // Display an error message
                    $("#errorMessage").text("Invalid credentials");
                }
            },
            error: (e) => {
                console.error(e);
                $("#errorMessage").text("There was an error");

            }
        });
    });

    const hideOverlays = () => {
        $('#listUsersContent').hide();
        $('#addUserContent').hide();
        $('#listFilesContent').hide();
        $('#uploadFileContent').hide();
    }

    $("#listUsersButton").click(() => {
        hideOverlays();
        $('#overlay').show();
        $('#listUsersContent').show();

    });
    $("#addUserButton").click(() => {
        hideOverlays();
        $('#overlay').show();
        $('#addUserContent').show();

    });
    $("#listFilesButton").click(() => {
        hideOverlays();
        $('#overlay').show();
        $('#listFilesContent').show();

    });
    $("#uploadFileButton").click(() => {
        hideOverlays();
        $('#overlay').show();
        $('#uploadFileContent').show();

    });

    $('#closeOverlayButton').click(() => {
        $('#overlay').hide();
        hideOverlays();
    });

    $("#uploadButton").on("click", () => {
        const fileInput = document.getElementById("newFileInput");
        const file = fileInput.files[0];
        const userID = $('#newFileUserID').val();

        if (file) {
            const formData = new FormData();
            formData.append("file", file);
            formData.append("user_id", userID);

            $.ajax({
                url: "save_file",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle the response from the server
                    $("#uploadResult").html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    $("#uploadResult").html("Error: " + error);
                }
            });
        } else {
            $("#uploadResult").html("Please select a file to upload.");
        }
    });

    $("#createUserButton").on("click", function() {
        var name = $("#newUserName").val();
        var username = $("#newUserUsername").val();
        var password = $("#newUserPassword").val();
        var email = $("#newUserEmail").val();
        var level = $("#newUserLevel").val();

        // Create a user object to send via AJAX
        var user = {
            name: name,
            username: username,
            password: password,
            email: email,
            level: level
        };

        $.ajax({
            type: "POST",
            url: "create_user", // Replace with your server-side PHP script
            data: user,
            success: function(response) {
                if(response === 'User created successfully!'){
                    $("#newUserName").val('');
                    $("#newUserUsername").val('');
                    $("#newUserPassword").val('');
                    $("#newUserEmail").val('');
                    $("#newUserLevel").val('user');
                }
                $("#resultMessage").html(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                $("#resultMessage").html("Error: " + error);
            }
        });
    });

    $(".change-password-button").on("click", function() {
        var user_id = $(this).data("user-id");
        var new_password = prompt("Enter the new password:");

        if (new_password !== null) {
            $.ajax({
                type: "POST",
                url: "change_password",
                data: { user_id: user_id, new_password: new_password },
                success: function(response) {
                    alert(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("Error: " + error);
                }
            });
        }
    });

    $(".delete-user-button").on("click", function() {
        var user_id = $(this).data("user-id");
        var confirm_delete = confirm("Are you sure you want to delete this user?");

        if (confirm_delete) {
            $.ajax({
                type: "POST",
                url: "delete_user",
                data: { user_id: user_id, confirm_delete: true },
                success: function(response) {
                    if (response.includes("success")) {
                        const row = $('#user_row_' + user_id);
                        row.remove();
                    }
                    alert(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("Error: " + error);
                }
            });
        }
    });
    
    $(".delete-file-button").on("click", function() {
        var file_id = $(this).data("file-id");
        var confirm_delete = confirm("Are you sure you want to delete this document?");

        if (confirm_delete) {
            $.ajax({
                type: "POST",
                url: "delete_file",
                data: { file_id: file_id, confirm_delete: true },
                success: function(response) {
                    alert(response);
                    if (response.includes("success")) {
                        const row = $('#file_row_' + file_id);
                        row.remove();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("Error: " + error);
                }
            });
        }
    });
    
});
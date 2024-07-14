
<HTML XMLns="http://www.w3.org/1999/xHTML">
<!--
	
	Functonality : This page is provided to customers and admin to login into the CabsOnlie application.
			 This page will take the email address and password from the user and varifies against the values stored in the database.
			 If the values match, Page is redirected to the Booking page for customers and admin page for Admin
			else, an error message is displayed.
--> 
  <head> 
    <title>Login Page</title> 
	<link rel="stylesheet" type="text/css" href="Cabsonline_Style.css">
  </head> 
  <body>
  <H1>Private Car Hires</H1>
	
	<H2>Login to Private Car Hires</H2>
<HTML XMLns="http://www.w3.org/1999/xHTML">
@model ContactUS.ViewModel.ContactViewModel
@{
    ViewData["Title"] = "Home Page";
}
<script src="~/lib/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="~/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>
<link rel="stylesheet" href="~/lib/bootstrap/dist/css/bootstrap.min.css" />
<div>
    <div class="col-md-6">
        <div>
            @if (ViewBag.Message == null)
            {
                <div>
                    <form method="post">
                        <div class="form-group">
                            <label asp-for="Name">Name</label>
                            <input asp-for="Name" class="form-control" />
                            <span asp-validation-for="Name" 

                            class="text-muted"></span>
                        </div>
                        <div class="form-group">
                            <label asp-for="Email">Email</label>
                            <input asp-for="Email" class="form-control" />
                            <span asp-validation-for="Email" 

                            class="text-muted"></span>
                        </div>
                        <div class="form-group">
                            <label asp-for="Subject">Subject</label>
                            <input asp-for="Subject" class="form-control" />
                            <span asp-validation-for="Subject" 

                            class="text-muted"></span>
                        </div>
                        <div class="form-group">
                            <label asp-for="Message">Message</label>
                            <textarea rows="5" cols="15" 

                            asp-for="Message" class="form-control"></textarea>
                            <span asp-validation-for="Message" 

                            class="text-muted"></span>
                        </div>
                        <div>
                            <button type="submit" 

                            class="btn btn-success">Send </button>
                        </div>

                    </form>
                </div>
            }
        </div>

        <div>
            <div>
                @if (ViewBag.Message != null)
            {
                    <div>@ViewBag.Message</div>


                }
            </div>
        </div>
    </div>

</div>
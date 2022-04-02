<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Joshua Quizon(jbq2)</td></tr>
<tr><td> <em>Generated: </em> 4/2/2022 12:58:18 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone1-deliverable/grade/jbq2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161342675-94c4108b-5849-42dd-86c2-71410e104a33.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Register Fields<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161342739-cb5e25ef-6fd6-4971-a526-0c66c479a88c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email Validate<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161342781-7321e8f3-58dc-44c2-b3f3-98d6dfc027ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Required Username<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161342842-a8465b70-dbc5-45af-b746-22f19ad8c265.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Passwords do not match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161342890-d8faa993-93a2-4380-92ad-364733e7a47a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Hashed Passwords<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161342944-9c3006b2-e961-4223-8f87-ad4cf7634830.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Unavailable Email (not unique)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161342999-76b3a95e-ee2f-49e7-9386-5e9ca88d0926.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Unavailable Username (not unique). For the unavailable email/username pictures, it can be seen<br>that the field retains whatever the user entered prior to clicking register.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161361800-19739ada-8778-4081-bc3e-265fd4c5d6a4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users Table Data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/15">https://github.com/jbq2/IT202-010/pull/15</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/45">https://github.com/jbq2/IT202-010/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>In register.php, a set of conditions are checked to ensure that information entered<br>inside the form is valid and in correct format.  Firstly, the program<br>checks if all fields are filled with some sort of text.  If<br>this is satisfied, then each field is validated.  For email, the is_valid_email<br>function is used to run the string through a regex that contains a<br>basic template for conventional emails.  Emails have text followed by an &#39;@&#39;<br>symbol, followed by some text, then a &#39;.&#39; followed by some more text.<br> For username, the same is checked.  Usernames should not have any<br>special characters and have a length limit.  A check on empty password<br>fields is checked.  If this is passed, then the &#39;password&#39; word field<br>is validated with is_valid_password and is then matched with the input for the<br>&#39;confirm field&#39;.  If any of the previously mentioned checks fail, the entire<br>form is invalid.  If all checks succeed, the program hashes the password<br>and a final check for username and email uniqueness is made.  This<br>is performed through a try catch when executing a query.  A failed<br>case occurs when the query fails because the username and email columsn are<br>unique, and so inserting a duplicate email or username is prohibited.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161335532-7e097e49-2ed7-48d1-92a3-215dae37ebc1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logging in With Email (presubmit)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161335577-0b913d76-9c5f-4d92-bb0a-c811e7f2d030.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logging in With Email (postsubmit) <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161335646-69660b1d-5ed5-47cb-b0de-11abe5943fdf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logging in With Username (presubmit)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161335662-afa03d56-0aeb-4a49-bcf2-3c2ff6efd287.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logging in With Username (postsubmit<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161335773-f9e74f75-d7ed-4d23-82a2-edff204a17ba.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logging in With Non-existing Account (presubmit)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161335809-a0646626-ff2b-43bd-a1b1-048336f8b8bc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logging in With Non-existing Account (postsubmit)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161335944-1c1e23e2-7897-48f6-85ee-933454b3116b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logging in With Wrong Password (presubmit)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161335979-07ae2cac-2683-4c4d-8844-15420eb4432c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logging in With Wrong Password (postsubmit)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161340141-1b899317-60fb-4373-a595-e16075937d8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code Block to Query User Info and Save to Session<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161335662-afa03d56-0aeb-4a49-bcf2-3c2ff6efd287.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Login Leads to Home Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/41">https://github.com/jbq2/IT202-010/pull/41</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/21">https://github.com/jbq2/IT202-010/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Upon form submission (onsubmit), the validate javascript function is called.  In this<br>function, a check of the email/username field is made.  In short, the<br>program runs a regex comparison for the entered information.  If it has<br>an &#39;@&#39; symbol, but still does not follow conventional email format, then a<br>flash message is shown saying &quot;Invalid email address.&quot;  As for a password<br>validation, the entered information is checked to be at least 8 characters in<br>length.  If not, a flash message is shown saying &quot;Password is too<br>short.&quot;  If either condition is failed, the return value of the validation<br>function is false.  Otherwise, it returns true.</p><br><p>For the PHP code, there are<br>a set of checks made that are very similar in structure to the<br>set of changes in registration.php.  Fields are initially checked to be empty.<br> If they are filled, the email/username field is checked.  If it<br>contains an &#39;@&#39; symbol, then the email check is performed using is_valid_email. <br>Otherwise, a username check is performed using is_valid_username.  A password check is<br>then made, initially checking if the field is empty.  If it is<br>populated, is_valid_password is used to validate the length of the password.  If<br>all these checks are successful, the program moves on to the query phase.</p><br><p>For<br>the code screenshot, a query is prepared and executed in the try statement.<br> In short, the entered username is first checked if it exists in<br>the database, and if so, the password is checked.  If the password<br>matches (through password_verify, which compares hashes), the roles of the user are fetched.<br> Once all this goes through successfully, the user and user roles are<br>saved to the session and the appropriate navbar and welcome message is shown.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161339883-0c61fd1a-e930-4324-b661-26489b07d491.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After Pressing Logout<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161339911-40aba86c-3bed-418a-9b3d-a36e4c146b08.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After Trying to Back Button (this implies that the previous session was destroyed;<br>from logging out, users cannot access pages restricted for logged in users).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/21">https://github.com/jbq2/IT202-010/pull/21</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/22">https://github.com/jbq2/IT202-010/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Though logout.php is extremely short, it possesses a key security feature through the<br>usage of the reset_session function.  We define this function in reset_session.php. <br>The following sequence of instructions is run: the session is unset (session is<br>cleared from usage), destroyed (destroys data from session), and a new session is<br>started (we end up on the default page for non-logged in users beacuse<br>all session information has been removed).<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161339181-0b66432d-2c60-4c52-a987-bf2ec37428b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Result of Back Button from Logout or putting home.php in the URL while<br>in Login page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161339522-c92fecdf-e489-47d6-b65a-9201b2658015.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged in Validation When Trying to Access list_role.php, assign_roles.php, and create_role.php (All admin<br>role protected)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161339659-68d98bbd-e830-42d6-a06e-eb032ab0b96e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles Table Has an Admin role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161363470-22d01c83-b549-4b46-b542-22b0ddce2ce5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UserRoles Table Maps User ID 4 (My Main Account) to Role ID 1<br>(Admin role)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/21">https://github.com/jbq2/IT202-010/pull/21</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/22">https://github.com/jbq2/IT202-010/pull/22</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/40">https://github.com/jbq2/IT202-010/pull/40</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For all login protected pages, the is_logged_in function is used before performing any<br>sort of operation.  This ensures that a user is logged in before<br>any data manipulation is made.  For example, profile.php calls is_logged_in() first before<br>doing anything.  If the return value of is_logged_in is false, the user<br>is directed to the login page.  Another example is home.php.  Before<br>we obtain any session data we need, is_logged_in is called to check if<br>the user is actually logged in.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>All role protected pages (as of right now) are in the admin folder<br>inside Project.  Each one of these php files (assign_roles, create_role, list_roles) is<br>prefaced with a call to the has_role function.  This function takes in<br>a single parameter--Admin--to check if the logged in user has the role. <br>A user that is not logged in that tries to access these pages<br>will be redirected to the login page because there is no session data<br>to pass a role into has_role.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161337191-1a067cb1-3daa-40a3-b693-b0ea59c2d823.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Register Page Form (as an example)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161337415-7b43c69b-2997-4b4d-b97b-a52af3f28eda.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CSS Picture 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161337514-f00a5c34-279e-46dc-b93e-a37f0f88b945.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CSS Picture 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161337593-d70c69be-2864-4cb0-9e1c-32dcd384dbed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CSS Picture 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/44">https://github.com/jbq2/IT202-010/pull/44</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I overall went with a dark theme for my website.  I think<br>it resembles Discord a lot which I like.  I essentially just changed<br>the color, text, font, and padding for a lot of the html elements.<br> For the nav li a elements, I made the edges round. <br>For the input text fields, I made the background dark gray and the<br>input text color a very light peach.  For the input submit fields,<br>I made them purple.  The coolest thing I incorporated was probably a<br>color fade upon hovering over buttons (input submit and nav bar buttons).<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391329-7d1bdcc0-d615-4d5a-befe-a2c56579adf6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Attempting to Access Login Protected Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391376-40b7eec9-2a24-46b1-8ac9-e320b2423d96.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Profile Update<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391403-fb1adf45-fd77-441e-9211-4a416a797419.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Logout<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161336747-3ceb007e-6a77-4a89-9dc7-59bd24fd2dd4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code of flash_messages.php:<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/23">https://github.com/jbq2/IT202-010/pull/23</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>The above code is the php file that populates the screen with an<br>appopriate flash message when it is called.  The flash function accepts 2<br>parameters: the actual message and the kind of error to display.  This<br>information is pushed to an array which is then returned by the getMessages<br>function, which is accepted by flash.php to show each flash message in the<br>array.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391489-7b05b9fb-d075-4ebf-b4b6-07a28a4fad96.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of User Profile Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/42">https://github.com/jbq2/IT202-010/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>IMPORTANT NOTE: the pull request that I linked to this issue is one<br>through Feat-UserLoginEnhancement. This is because I made a mistake during the user profile<br>lecture where I copy and pasted the wrong code into profile.php. I noticed<br>it was incorrect during the lecture where we worked on the Feat-UserLoginEnhancement branch<br>and I corrected my error. Sorry if this causes any sort of confusion.</p><br><p>Initially,<br>the the program checks if the user is logged in.  If not,<br>we terminate the later script and redirect the user back to login.php. <br>If they are logged in, we continue.  The page is populated with<br>a list of fields that the user can enter information into the make<br>changes to their profile.  By default, the username and email fields are<br>already filled with the current user&#39;s information. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391539-5caca9b2-90fb-4e0c-8517-46ed87683cda.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error Message When Entered Current Password is Wrong<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391592-7225cc65-4280-407e-bfbd-eea2e8295795.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error Message When New Password and Confirm Password Do Not Match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391690-eea1f9d7-6e50-415c-b035-4a42f065f841.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Username and Password Change<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391758-baa5f322-c396-44c6-bc0a-28131debfc45.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Duplicate Email Error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391770-1a4d8d2c-1e62-4e22-8578-0ad06b1655af.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Duplicate Username Error<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391646-22cb819b-45eb-4207-93dc-092925607261.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before Update Profile User Table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161391724-5891b867-162e-4c73-98ad-fc259d2defce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After Update Profile User Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/42">https://github.com/jbq2/IT202-010/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>IMPORTANT NOTE: the pull request that I linked to this issue is one<br>through Feat-UserLoginEnhancement. This is because I made a mistake during the user profile<br>lecture where I copy and pasted the wrong code into profile.php. I noticed<br>it was incorrect during the lecture where we worked on the Feat-UserLoginEnhancement branch<br>and I corrected my error. Sorry if this causes any sort of confusion.<br></p><br><p>The user can enter changes he or she wants to make into the<br>fields.  The username and email fields are already populated with the current<br>user&#39;s username and email.  This is a quality of life feature. <br>If the user decides to change either his or her email/username, a check<br>to see if the newly inputted information is unique in the database. <br>This is done through catching a &#39;1062&#39; error.  If this error is<br>caught, this signfies a duplicate entry error, which we handle by sending a<br>user-friendly error message.  Secondly, the user can also change their password. <br>For this part of the code, an initial check is made to see<br>whether or not all password fields are empty.  If they are empty,<br>the user is alerted that they need to be filled out.  If<br>they are not empty, the following checks are made: check if the current<br>password matches the user information (through password verify).  If so, check if<br>the new password and confirm password match.  If so, all the newly<br>entered information is saved into the database and the session is refreshed with<br>the new data in the table.  If one of the checks fail,<br>then a proper user-friendly flash message is shown.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161388711-298bc85f-969e-450d-adb7-39a9d6c76327.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>proposal.md Update 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161388743-493cf6cb-e60a-4eae-aae4-e977171d2484.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>proposal.md Update 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161388775-e0aa7061-3e07-487d-a024-ead70326895e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>proposal.md Update 3<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161388815-5bb4a715-3498-40a7-96c3-bc1fb1319aca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>proposal.md Preview 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161388836-62535fd2-69b2-4ba0-a580-71c36fd3075f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>proposal.md Preview 2<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161388986-4fa35125-9181-4cdc-99b5-98830b383639.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Done Issues 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161389020-a82c1a83-3cac-4146-9f7b-a03bbf510b3c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Done Issues 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/161389038-ca98808a-4aa9-4367-978a-8fcf757ca289.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Done Issues 3<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone1-deliverable/grade/jbq2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Shop Project</td></tr>
<tr><td> <em>Student: </em> Joshua Quizon(jbq2)</td></tr>
<tr><td> <em>Generated: </em> 5/11/2022 12:22:25 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-4-shop-project/grade/jbq2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167755387-08fb4274-ecec-4283-b51d-f94af77f49bf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Users Table with New Column &quot;public&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167755471-4884a260-a5ca-4c13-8eb0-87d613bfc797.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of New Radio Field for Public Profile Option<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167755638-1b19a130-2607-49fe-83e6-1eac8c34d824.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Viewing Another User&#39;s Profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/123">https://github.com/jbq2/IT202-010/pull/123</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/profile.php?userid=36">https://jbq2-prod.herokuapp.com/Project/profile.php?userid=36</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>For my implementation of this feature, the view of profile.php changes depending on<br>the GET pulled from the url.  Basically, if the userid key in<br>the url has a value that is the same as the current user&#39;s<br>user id, then it shows the normal profile.php page (the normal form to<br>change your profile).  However, if the userid key in the url is<br>different from the current user&#39;s user id, this means that the user is<br>attempting to another user&#39;s profile.  This is when the view changes. <br>A query is made to pull from the Users table the row in<br>which the id = the user id from the url.  Initially, a<br>check is made to see if there was even a pulled result. <br>If not, then the user is redirected to their own profile.php page with<br>a message saying that the profile they tried to view does not exist.<br> If there was a pulled result, it is checked to see if<br>the row&#39;s public setting is set to true (1 if profile is set<br>to public, 0 if profile is set to false).  If false, the<br>user is redirected to their own profile page and a message is shown<br>saying that the profile is set to private.  If the pulled row<br>is set to public, then we display the user&#39;s information.  When the<br>userid in the url is equal to the current user&#39;s user id, the<br>UI that is displayed is the form for changing one&#39;s profile.  Otherwise<br>(current user id != url user id), we show a UI that says<br>&quot;Viewing Other Profile&quot;, and details regarding the other user&#39;s profile (user id and<br>username).<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to rate a product they purchased </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Ratings table with some data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167755994-269f1192-efe6-4289-8ecd-fbb8c435fbed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Ratings Table with Data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Product Details page with comments/ratings and the form to add another and the average rating</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167756117-96b75e57-c45e-4f3f-b64d-14222198961a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot that Displays Ratings, Score and Comment Form, and Average Rating <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the error message for a user trying to rate/comment that hasn't purchased the product</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167756225-2a0c8666-b90d-44ec-8fa1-154fe652c0a7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Hidden Score/Comment Form (only for users that have not purchased the<br>item) <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/124">https://github.com/jbq2/IT202-010/pull/124</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/125">https://github.com/jbq2/IT202-010/pull/125</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/131">https://github.com/jbq2/IT202-010/pull/131</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to a product details page with ratings/comments</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/product_info.php?id=1">https://jbq2-prod.herokuapp.com/Project/product_info.php?id=1</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic being adding comment/rating and validations</td></tr>
<tr><td> <em>Response:</em> <p>NOTE: there is no error message for a user trying to comment without<br>purchasing an item.  This is because the form is hidden and inaccessible<br>if the user has not purchased the item.  If the user has<br>purchased the item, the form is shown.  This is done through a<br>php if statement embedded into html.</p><br><p>This feature is implemented directly into product_info.php. <br>First, a check is made to see if the user currently viewing the<br>product details has purchased the product.  This is done through a query<br>that performs an inner join of the Orders and OrderItems table on the<br>condition that the order id of the two tables match. The rows that<br>are specifically selected are the ones in which the Order&#39;s user id =<br>the current user&#39;s user id and the product id = the id of<br>the current product that is being viewed.  If this query returns results,<br>a variable $purchased is set to true.  Otherwise, $purchased = false. <br>Later on in the code, a php if statement is embedded into html<br>to display the score/comment form for the product if $purchased = true. <br>Otherwise, the form is not shown.</p><br><p>If the form is shown, then the user<br>can review the product.  There are two fields: score, and comment. <br>The score is a select field that allows a user to pick a<br>score for the item from 1 - 5.  The comment is a<br>textbox where a user is required to enter some text if they want<br>to submit a review.  The validations for this form are done through<br>javascript and require that the score and comment fields are filled out. <br>If they are not filled out, the user is given a message on<br>what they must do and the form does not get submitted.  If<br>the user&#39;s entry passes validations, a couple of queries are performed.  The<br>first of which is actually inserting the review into the Rating table. <br>Doing so is quite simple, as the product id, user id, rating, and<br>comment that the user left as passed in as values in the query<br>which is then executed.  After this query runs, the user is given<br>a nice message saying &quot;thank you for reviewing this item.&quot;  The second<br>query is for updating the average rating of the product in the Products.<br> This query is one of the more complicated ones of this project,<br>though it can be summed up by describing it as an update to<br>the products table.  This update sets the avgrating of the specific product<br>to a subquery that returns the average rating of the product from the<br>Ratings table.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167756694-852e074d-4406-49be-b650-3004367c3a8c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Purchase History Before Applying Filters<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167756792-91722dc4-3889-4383-bb23-848c81f34e60.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot After Applying Filters (date range from April 29 to May 10)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167757273-b54dc99e-0902-4fb3-95f8-3f081019960f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 1 of Purchase History<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167757461-88b163fa-9e21-4437-ac10-7c05b2a3c103.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 2 of Purchase History<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/126">https://github.com/jbq2/IT202-010/pull/126</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/127">https://github.com/jbq2/IT202-010/pull/127</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/131">https://github.com/jbq2/IT202-010/pull/131</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/purchase_history.php">https://jbq2-prod.herokuapp.com/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied (ensure the calculated total price is clearly visible)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167757936-a64a4ab1-4253-4182-9347-1a092047f9ca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Shop Owner Purchase History View Before Filtering<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167758826-09f3da97-dc31-4c32-a89b-4df2850aea4f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Shop Owner Purchase History View After Filtering (date range from April<br>29 to May 12)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167758936-01e1498f-054a-453f-9733-15c857ca9627.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 1 of Store Owner Purchase History<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167759026-385c4bce-4e11-43a7-8028-f5dc7dfc88c9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 2 of Store Owner Purchase History<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/127">https://github.com/jbq2/IT202-010/pull/127</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/131">https://github.com/jbq2/IT202-010/pull/131</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the store owner's purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/purchase_history.php?page=1">https://jbq2-prod.herokuapp.com/Project/purchase_history.php?page=1</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the total price is calculated based on the filtered/paginated results</td></tr>
<tr><td> <em>Response:</em> <p>NOTE: my implementation for this feature was done directly on the already existing<br>purchase history page.  A role check is made prior to the results<br>getting fetched.  If a user is a shop owner or an admin,<br>they can see all users&#39; purchase histories with information on what orders belong<br>to user ids.  If the user is not a shop owner or<br>an admin, then they are only able to see their own purchase history.</p><br><p>Calculating<br>the total price was rather simple due to the way pagination works. <br>Because pagination runs a query for each page, the result set from a<br>query of a page only includes the rows for that page.  In<br>my implementation, I run a php foreach loop on the resulting array from<br>the query.  In this foreach loop, I access the value of the<br>&quot;total_price&quot; key and add it to the $listedTotal variable (variable that holds the<br>sum of all order totals for a certain page).  This $listedTotal variable<br>is then displayed in the page.  However, it is only displayed if<br>the user is a shop owner--this is done through a role check for<br>the user and an embedded php if statement in the html for displaying<br>the listed total.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to Shop and any other product lists not covered </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot(s) of the newly paginated pages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167759606-72c9cd43-1986-4f10-938d-db8e1a7d2da3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 1 of Shop Page (no filters)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167759687-0069d7cc-3c61-4640-80ab-471ec65f5e73.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 2 of Shop Page (no filters)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167759722-6add2706-eda9-492f-b266-d29b10f9edd7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 3 of Shop Page (no filters)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167759770-d0320afe-730c-4b99-9d7f-d8f1fbcdab9f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 1 of Shop Page (Searched for &#39;Logitech&#39;)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167759839-e2e891c5-b379-4b18-8c5f-eab466155b3b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 2 of Shop Page (Searched for &#39;Logitech&#39;)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/131">https://github.com/jbq2/IT202-010/pull/131</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related pages</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/shop_page.php">https://jbq2-prod.herokuapp.com/Project/shop_page.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Store Owner will be able to see all products out of stock </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the out of stock results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167760084-02a6daa7-6ebd-40a5-b1c2-5aa14ed536d4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of List of Products (Admin/Shop Owner View) Stock Filter Option<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167760175-28bae375-ea27-4e30-9e97-2642371f02b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Out of Stock Products <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/129">https://github.com/jbq2/IT202-010/pull/129</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/131">https://github.com/jbq2/IT202-010/pull/131</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/admin/admin_shop_page.php">https://jbq2-prod.herokuapp.com/Project/admin/admin_shop_page.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain your approach to this view</td></tr>
<tr><td> <em>Response:</em> <p>My implementation for this feature was in the form of a sort/filter option<br>for the admin_shop_page.php page.  The user has 3 options for this field:<br>&quot;All&quot;, &quot;In Stock&quot;, and &quot;Out of Stock&quot;.  If &quot;All&quot; is chosen, then<br>no extra condition is added to the base query and num rows query.<br> Otherwise, an extra condition is concatenated into the base query and num<br>rows query.  If the user has chosen the &quot;In Stock&quot; option, the<br>extra condition of &quot;AND stock != 0&quot; is added to the WHERE clause<br>of the base query and num rows query.  If the user has<br>chosen the &quot;Out of Stock&quot; option, the extra condition of &quot;AND stock ==<br>0&quot; is added to the WHERE clause.  The query is then run,<br>returning the appropriate results.</p><br><p>To differentiate between in stock and out of stock items,<br>those that are out of stock have an extra note to their item<br>card that says &quot;OUT OF STOCK&quot; in bold face.  This is helpful<br>when the user is looking at all items (regardless of the stock).<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User can sort products by average rating on the shop page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing the sort in effect</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167763700-87274ad3-2023-402b-b892-de5345c634d1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 1 With Rating Sort Set to Increasing Ratings<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167763775-d280ee24-8078-4933-88e3-8b94b874b5d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 2 With Rating Sort Set to Increasing Ratings<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167763800-0f84e1f4-15fa-43ad-9890-a86e7c6591e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 3 With Rating Sort Set to Increasing Ratings<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167763889-f85816f8-0dbe-4d44-bba8-431e27634fc2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 1 With Rating Sort Set to Decreasing Ratings<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167763915-f9276731-f025-4d40-8808-e34efe1b925d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 2 With Rating Sort Set to Decreasing Ratings<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167763934-f8ab81ed-34c3-4c18-8816-a8eebb6364f4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Page 3 With Rating Sort Set to Decreasing Ratings<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Products table (or your implementation/approach to average rating)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167764061-ef35d055-2d37-41a3-850a-c6f7b9e322ab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Products Table with avgrating Column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/128">https://github.com/jbq2/IT202-010/pull/128</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/133">https://github.com/jbq2/IT202-010/pull/133</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/shop_page.php">https://jbq2-prod.herokuapp.com/Project/shop_page.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you implemented the average rating recording logic and how it applies to this sort on sho</td></tr>
<tr><td> <em>Response:</em> <p>The way I implemented my average rating was to have a separate column<br>in the products table.  Whenever a review is made for a<br>product, a query is run (from product_info.php) that updates the avgrating column of<br>that specific product.  To sort the shop page results by average rating<br>is very simple.  I have a field in the filter bar of<br>my shop page that allows the user to choose from 3 options for<br>sorting based on rating: &quot;None&quot;, &quot;Increasing&quot;, and &quot;Decreasing&quot;.  If the user chooses<br>none, then avgrating is not added to the ORDER BY clause of the<br>query.  Otherwise, avgrating is added to the ORDER BY clause of the<br>query followed by ASC (if &quot;Increasing&quot; was chosen) or DESC (if &quot;Decreasing&quot; was<br>chosen).  This filter is then applied upon hitting submit--those that have no<br>ratings are treated as having a rating of 0, and a note on<br>the item card shows the average rating of an item (if there is<br>one) or a message that says &quot;No ratings&quot; (if the item has an<br>avgrating of 0).  An item with an avgrating of 0 means that<br>it has not yet been rated, due to the fact that the possible<br>score options for reviewing an item do not include 0 (minimum score a<br>user can give an item is 1, so the lowest possible reviewed item<br>has an avgrating of 1). <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167755043-f1e29aa3-f423-4b4b-b5e9-02a258556d46.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Milestone 4 Section of proposal.md<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167755242-af757345-b752-4f66-a2fd-be4ae03806f7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 1 of Milestone 4 Features Marked Done<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/167755286-333030c4-7bd5-46e5-9d95-a8add646f1c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 2 of Milestone 4 Features Marked Done<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-4-shop-project/grade/jbq2" target="_blank">Grading</a></td></tr></table>

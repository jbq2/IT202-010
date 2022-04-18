<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Joshua Quizon(jbq2)</td></tr>
<tr><td> <em>Generated: </em> 4/17/2022 11:15:47 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-2-shop-project/grade/jbq2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736658-8cb2723d-1962-4c6c-b11b-f135c8cb4227.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of add product page (create item)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163302823-44e7c893-2fae-41b9-a4c2-42f41fd44cd7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of populated products table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>The following initial checks are made: the user must be logged in and<br>the user must have an Admin or Shop Owner role.  If neither<br>of these pass, they cannot access the add product page.  If the<br>user passes these checks, the admin_products.php page must build the layout.  First,<br>a list of the categories is created by running a query against the<br>Category table to obtain all category names.  This will be used in<br>a drop down selection input in the add product form.  The fields<br>of the form consists of inputs fields for gathering information for the name,<br>description, category, price, stock, and visibliity columns.  Then, client-side validation is performed<br>using JS to check for empty inputs and valid inputs for stock and<br>price.  Finally, server-side checks are made as a final security barrier. <br>If these checks are passed, the item&#39;s information is inserted to the Products<br>table using an INSERT INTO statement.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/79">https://github.com/jbq2/IT202-010/pull/79</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/80">https://github.com/jbq2/IT202-010/pull/80</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/admin/admin_products.php">https://jbq2-prod.herokuapp.com/Project/admin/admin_products.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736685-940edaa9-1aeb-4c85-a845-0c6f8e3e22e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 1 of products page (no filters)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736693-08aa45d0-05fc-461e-b49c-2d00d0a0a1b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 2 of products page (no filters)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736707-b6c9bf95-92e2-4ed3-b51d-df52b4b4e2e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of products (filtered search by &#39;Logitech&#39;, filter by &#39;General Products&#39; category, sort<br>by decreasing price)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code (ensure ucid and date is shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163746599-e2f0a7bb-0a9f-4d37-8f2e-6fc7ea0a3c09.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 1 of filter code<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163746704-87af36f0-d5fe-425a-99ed-1c818725aa70.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 2 of filter code<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163746778-7783ddd9-f771-48a9-87e1-b92aa75a4085.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 3 of filter code<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163746841-26c8d834-8ce0-4ec5-87bc-bec27a514aa1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 4 of filter code<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163746931-866de770-90c9-45cc-a54e-77e52824f153.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 5 of filter code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>Firstly, the results are shown based on the resulting map that comes from<br>a query to the Products table.  This result map is iterated through<br>first to gather only the first 10 items (inserted into $toDisplay).  $toDisplay<br>is the map that will be used to display onto the shop page<br>screen.</p><br><p>The following paragraph explains my filter code very briefly, as it is extremely<br>long.<br>The following conditions are checked: no filters are used, only one of the<br>each filter is used, or a combination of 2-3 filters are used. <br>When the search filter is used, the query WHERE condition performs a partial<br>patch on the name field given the search filter&#39;s value (what the user<br>entered).  When the category filter is used, the query WHERE condition is<br>category = :category (:category being whatever category the user chose).  When the<br>sort by price filter is used, the query is appended with an ORDER<br>BY statement (either ASC or DESC).  When more than 1 filter is<br>used, a combination of the previously discussed queries is used.  For example,<br>if all three filters are used, then the query would look something like<br>SELECT <fields> FROM Products WHERE name LIKE :name AND category = :category ORDER<br>BY unit_price ASC | DESC. </p><br><p>Why did I not use the given filter<br>code?:  I understood the modularity of the filter code given to us,<br>and I agree that it is much easier to read and most likely<br>more efficient as well.  However, I would have to do a lot<br>of refactoring to that code as well to allow it to match the<br>conditions of my current code.  I believe that the given filter code<br>does not take into account unused fields, and instead has a default choice<br>for each filter type.  In addition, I tried using a similar method<br>for the ORDER BY portion of the filter system, but I kept getting<br>an error that would not accept ASC and DESC when they are concatenated<br>to the query.  It only worked for me when it was hard<br>written INTO query statements, which I would choose between different query statments depending<br>on the usage of the sort by price filter.  I want to<br>implement a better solution to the filtering code, but as of right now,<br>I would like to use this current code as a placeholder because it<br>absolutely works.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/81">https://github.com/jbq2/IT202-010/pull/81</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/shop_page.php">https://jbq2-prod.herokuapp.com/Project/shop_page.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736767-a358b3e5-78d2-44cd-bb68-4e5aeef8fcf1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin/Shop Owner Product List Screenshot 1 <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736794-d09d376d-5d8a-4702-8860-f7c769d6f9a6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin/Shop Owner Product List Screenshot 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736812-b7504ad2-fe44-490c-bc0f-b540577bfa48.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin/Shop Owner Product List Screenshot 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>The page is very similar in code to the normal shop_page.php, except the<br>max result count of 10 per page has been removed and the visibility<br>status of each item is shown.  The filtering system is still in<br>effect, but the condition that restricts that the visibility should be true (visibility<br>= 1) has been removed for each query.  An edit button has<br>also been added to each item card which redirects the admin/shop owner to<br>the edit product page.  Each item card is also clickable (item card<br>is wrapped inside an a tag) which allows the user to go the<br>the product details page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/83">https://github.com/jbq2/IT202-010/pull/83</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/90">https://github.com/jbq2/IT202-010/pull/90</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/admin/admin_shop_page.php">https://jbq2-prod.herokuapp.com/Project/admin/admin_shop_page.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a sceenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736829-ddf26c69-e80d-48b4-92bc-7fb2290d26f9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit Button Visible on shop_page.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a sceenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736896-c4b522d5-f213-4b80-88ef-137c0e508546.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit Button Visible on product_info.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a sceenshot showing the edit button visible to the Admin on the Admin Product List Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736903-0ea5f93b-70d4-497d-894b-75efed71bec1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit Button Visible on admin_shop_page.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163736957-fbcc586b-cb63-43db-a2f1-ba43c29750ae.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Pre-submit (changing description, category, and stock)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163737005-2eeb12cc-4026-4942-bd01-c7e78ce30afa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Post-submit (Changed description, changed category to Mouse, changed stock to 2)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163737051-e8e16ee7-c660-44e2-84e1-d6fa1fcb4943.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Product Now Shows as a Mouse and there are 2 in Stock<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>The process to editing a product is very similar to creating a product<br>when it comes to the fields and field validations.  There is a<br>field for name, description, category, price, stock, and visibility.  All these fields<br>must be filled in (checked on the client side and server-side), and must<br>also have valid inputs (price and stock fields are checked against a regex<br>to see if they fit the valid criteria).  The difference in this<br>page is the query.  Instead of an INSERT INTO, there is an<br>UPDATE TABLE query.  I update the Products table by setting the column<br>values to the new values on the condition that id = $itemID (the<br>id of the product that is to be edited).  This item id<br>is obtained through various methods which are slightly different for each page that<br>the edit button appears in.  For product_info.php, this link has saveable information<br>in the link (the product id is shown in the link), and so<br>it is easy to obtain the product id via $_GET.  As for<br>shop_page.php and admin_shop_page.php, when each item card is created iteratively, each edit button<br>associated with each item card has a different link it leads to (depending<br>on the id of the product).</p><br><p>NOTE: in the below links that implement this<br>feature, the product_info.php page depends on the key value pair following the ?.<br> This is because I want a product details page to be saveable.<br> This also allows for easier implementation of the edit button from the<br>product details page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/85">https://github.com/jbq2/IT202-010/pull/85</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/90">https://github.com/jbq2/IT202-010/pull/90</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/admin/admin_shop_page.php">https://jbq2-prod.herokuapp.com/Project/admin/admin_shop_page.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/shop_page.php">https://jbq2-prod.herokuapp.com/Project/shop_page.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/product_info.php?id=1">https://jbq2-prod.herokuapp.com/Project/product_info.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163737112-da89b447-4b0f-466e-8813-de42259c1223.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Clickable Item Card<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163737150-90d5cbdc-1365-4b49-a584-26c123cf2a54.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Product Details Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>NOTE: for the first screenshot above, I took a video and took a<br>screenshot of that video.  This is because my cursor was not showing<br>up with the snip tool or print screen function.  I needed the<br>cursor to show to prove that the item card is clickable.</p><br><p>To create the<br>item cards, a query is made to select all visible products.  This<br>is important because the resulting map will be iterated through in order to<br>create the item cards for the page.  Once this query has been<br>made, the result query is iterated through first to gather the first 10<br>elements of the result (toDisplay array).  This new array is the one<br>that is to be iterated through when creating the item cards.  I<br>did this through an embedded foreach block inside my html productsListDiv div. <br>Each item container (inside the item card div), is wrapped in an a<br>tag.  This allows for the image and text of the item card<br>to be clickable.  Each link has an href attribute that leads to<br>a product_info.php link with an added key value pair (key: id, value: product<br>id).  This allows for each item card to have its own unique<br>link that depends on the product it represents.  This same process is<br>used in admin_shop_page.php (except the restriction of showing only 10 elements has<br>been removed, and all items are shown despite the visibility status).</p><br><p>NOTE: in the<br>below links that implement this feature, the product_info.php page depends on the key<br>value pair following the ?.  This is because I want a product<br>details page to be saveable.  This also allows for easier implementation of<br>the edit button from the product details page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/84">https://github.com/jbq2/IT202-010/pull/84</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/product_info.php?id=1">https://jbq2-prod.herokuapp.com/Project/product_info.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163737175-0ed196e8-235f-4997-bd71-8c6515c18ac5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of successfully adding item to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163737190-8fa76e63-f313-4324-a8c4-3ef1fc65b0e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of required login to add to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163715777-3ed471eb-d90d-4c55-a643-08d37980e349.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Cart table data<br></p>
</td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>My cart system is only 1 cart per user.  A cart table<br>was created with id, product_id, user_id, desired_quantity, unit_price, created, and updated columns. <br>product_id and user_id are a unique composite key (though not the primary key)<br>and both fields point to a product id and user id in the<br>products and users table respectively.  The composite unique key is important because<br>it restricts the user from adding the same item in their cart (this<br>also implies that they can only have 1 cart).  <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>The add button is a form input of type submit which sends a<br>POST request to the back end.  This POST request is caught and<br>saved to a variable $add, which is then checked.  If it is<br>empty, then the add script does not run.  Otherwise, it does run.<br> Initially, a check is made to see whether or not a user<br>is logged in.  If not, the user is redirected to the login<br>page.  If they are logged in, a query to select all current<br>items the user&#39;s cart is made.  This is to compare the current<br>item to be added to see if it is already in the user&#39;s<br>cart.  If not, an INSERT INTO query is then made to the<br>Cart table.  A new row is inserted given the product_id (obtained from<br>the key value pair in the product_info.php link), user_id (for get_user_id()), quantity (adding<br>to cart defaults it to 1 if the item is not currently in<br>the cart), and the price of the item (obtained through accessing the value<br>of the $item variable&#39;s unit_price key).  <br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/88">https://github.com/jbq2/IT202-010/pull/88</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/87">https://github.com/jbq2/IT202-010/pull/87</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View (show subtotal, total, and the link to Product Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163751016-7ca6f73b-055b-4332-b1bd-1f8588ca20ee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Cart Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>NOTE: in the above screenshot, the name of each item is clickable and<br>leads to the product page.  This is shown through the cursor being<br>able to click on the product name.</p><br><p>The display used in the cart page<br>(as of right now) is using the html table tag.  Each row<br>represents an item in the user&#39;s cart and displays the name of the<br>item (which is also a link to the product details page), quantity, and<br>subtotal.  Under the table is the total of all the items (pretax).<br> The subtotal of each item is displayed when the query to get<br>the user&#39;s cart items is made (C.desired_quantity*P.unit_price), where C is the Cart table<br>and P is the Products table.  Each result row obtained from the<br>query has this subtotal, which is then displayed as a section of table<br>data.  To find the total, the $results map is iterated through to<br>obtain the value of each subtotal key.  Each subtotal is added to<br>the $total variable which is then displayed below the table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/88">https://github.com/jbq2/IT202-010/pull/88</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/cart_page.php">https://jbq2-prod.herokuapp.com/Project/cart_page.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163743437-204e0803-db9a-4d49-8e6b-867365c0443a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before quantity update (before increasing first item&#39;s quantity)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163743493-804277fd-2183-4995-b643-46d0888c3c79.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After quantity update (increased quantity of first item from 2 to 3)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163743577-e3ce67f6-55d4-4e2d-9f4a-b9cc950ef84a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before setting Logitech K380 quantity to 0<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163743662-3bafc22e-85fb-4338-a60c-223f5785b1b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After setting Logitech K380 quantity to 0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163727734-23cdeebd-3dd9-4402-a499-33c5446d4788.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of SQL Check Constraint on desired_quantity field<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163727781-c7cc3e67-39dd-4bd3-8c13-8a528a680d29.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Code to Handle Quantity of 0&#39;s<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>The way users of my website can update their quantities is by using<br>the - and + buttons in the quantity section of the table. <br>This increments and decrements the quantity of a specific item by 1. <br>Each button is part of a form.  Once a button is pressed,<br>a request is sent to the backend and is caught by either a<br>$increment or $decrement variable (depending on what button is pressed).  Each variable<br>is checked for being empty--if not empty, that means that button has been<br>pressed.  For the + button, an UPDATE TABLE query is sent to<br>increment the desired_quantity by 1 (desired_quantity = desired_quantity + 1).  However, for<br>the - button, there is a special case to be handled--PDOException with error<br>code HY000.  This error code is specific to violating a CHECK integrity<br>constraint.  As can be seen in the above screenshot of SQL code,<br>a check is made on desired_quantity to always be above 0.  If<br>it falls to 0 or below, it throws a PDOException of code HY000.<br> This specific error is handled in the catch statement of the above<br>code by simply deleting the item that has reached a quantity of 0.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/89">https://github.com/jbq2/IT202-010/pull/89</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163743821-be29cef6-f826-461f-8c52-45ac2ee956e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before removing Logitech KBClicky<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163743883-d1935117-4c96-4eb7-9d14-853703c8652a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After removing Logitech KBClicky<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163743913-a1dd0bd1-6605-4f5f-8bca-03b77b63ac59.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before cart is cleared<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163743967-862eb8fe-d736-4d2b-b874-df25e4599950.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After cart is cleared<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>For removing a single item from the cart, this is achieved through clicking<br>the black X button next to the name of each item in the<br>cart.  This button is part of a form and is submitted upon<br>getting clicked.  Upon submission, the request is sent to the backend and<br>the information from clicking the X button is caught by the $removeItem variable.<br> This variable is checked for emptiness.  If it is not empty<br>(when the button is clicked), a query is run to delete a row<br>in the cart where the productID of the row matches the item next<br>to the clicked X button and the userID of the row matches the<br>current session&#39;s user id.</p><br><p>For clearing the entire cart, the process is similar. <br>The clear cart button is part of a form that sends a request<br>to the backend upon getting clicked.  This request and information is caught<br>by the $clear variable.  If $clear is not empty (when the clear<br>button is clicked), the query is run to delete any row that has<br>a user id field that matches the current session&#39;s user id.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <em>Response:</em> <p><a href="https://github.com/jbq2/IT202-010/pull/89">https://github.com/jbq2/IT202-010/pull/89</a><br><a href="https://github.com/jbq2/IT202-010/pull/88">https://github.com/jbq2/IT202-010/pull/88</a><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163748603-362dc092-6888-48f3-a411-4e59a7763c20.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Populated Milestone2 Portion of proposal.md<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163748743-febcf675-da5f-4654-8fa9-24aa976200b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 1 of MS2 Issues in Done Column<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163748802-c4dff0b0-1d92-4ed4-bc81-ef990ebefd11.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 2 of MS2 Issues in Done Column<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/163748853-6dc94351-89b0-41c3-937b-e014cd0b8555.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 3 of MS2 Issues in Done Column<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-2-shop-project/grade/jbq2" target="_blank">Grading</a></td></tr></table>
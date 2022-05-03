<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Joshua Quizon(jbq2)</td></tr>
<tr><td> <em>Generated: </em> 4/29/2022 9:07:51 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-3-shop-project/grade/jbq2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to purchase their cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="![image](https://user-images.githubusercontent.com/98120760/166053339-8e713205-8f77-4d88-98af-3d2c864576a2.png)">![image](https://user-images.githubusercontent.com/98120760/166053339-8e713205-8f77-4d88-98af-3d2c864576a2.png)</a> </td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166054049-4736e109-f2ee-4582-b090-e0cf5d478511.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>OrderItems Table with Data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166054525-2894b26c-b3d2-488a-9799-f15c04b1eafd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 1 of Checkout (Purchase) Form<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166054805-38a41409-52d2-4081-9175-d8190d0fc90a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 2 of Checkout (Purchase) Form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the purchase validation code (ensure your ucid and date are included) (Payment method, purchase value, shipping info)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166084571-219182b8-1480-4f13-b27f-a3891567cf65.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 1 of Checkout Validation (Client Side)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166084587-ccea631f-5757-4a11-aaf6-f67af769c11d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot 2 of Checkout Validation (Client Side)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the UI (Price check, Quantity/Stock check)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166072669-cc586340-559a-4bbd-8cf7-a1ff57ddb40d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Message when Desired Quantity exceeds Current Stock (the user is sent<br>back to the cart page to edit their order)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166073342-09c02679-bd92-4e65-8fe3-1e6bfe18eda4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Price in the Checkout Page (Price Checking Explained in Code)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166073460-a486c849-b9dd-4413-b7f9-5412295e091b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Price Checking Code (To Be Explained Below)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <p>Firstly, a couple of server side processes are run--one for creating a cart<br>view in the checkout page, and another for checking if the desired quantity<br>of a cart item is less than the actual stock of an item.<br> For the cart view, a simple query is run to gather necessary<br>information for displaying in the cart.  This includes the product name, quantity,<br>id, and subtotals of each product.  For checking the stock, I make<br>a separate query to the database to pull the actual stock of a<br>product from a database and compare it with the desired_quantity of the same<br>item from the cart table.  If the stock from the product table<br>is less than the desired quantity in the cart table, then the user<br>is sent back to their cart with a message that says &quot;Not enough<br>[cart item name] in stock ([x number of items] left in stock)&quot;. <br>However, if the desired quantity is acceptable (it does not exceed the current<br>product stock), then the user will be able to see the checkout form.</p><br><p>A checkout form is made, and is submitted to the server upon pressing the<br>complete purchase button.  The required fields are first name, last name, address,<br>city, state, country, zip code, payment type, and money.  The apartment field<br>is optional.  Upon filling these fields with content and pressing the complete<br>purchase button, the form is called to return the result of a validate<br>client side function I had defined for the form.  This validate function<br>serves a similar purpose as other validation functions from pages like login.php, register.php,<br>and profile.php.  All fields must be validated except for state, country, and<br>payment type (because these are always going to have some sort of value).<br> All fields go through some kind of regex test to be confirmed.<br> However, the money field goes through a separate test to determine whether<br>or not it is a sufficient amount to pay for the cart items.<br> This is done through obtaining the text in the money field and<br>the total header, parsing each of the strings, and running a comparison between<br>them.  If the amount of money to be sent is less than<br>the total, then it is insufficient.</p><br><p>When all client side validations are made and<br>successful, then the server side processes for actually performing the purchase operation are<br>performed.  Firstly, the because the Orders table does not have individual columns<br>for first name, last name, and the various components of an address, those<br>fields that were pulled from the form must be concatenated into variables they<br>are associated with (fullName for first name and last name, and fullAddress for<br>the address components).  Then, the first INSERT INTO query is made into<br>the Orders table.  These enter the information that was pulled from the<br>form.  Once this is done, the order that was just entered must<br>be the most recent order for that user. This implies that this recent<br>order&#39;s id is going to be the greatest order id value relative to<br>the user.  Upon knowing this, a second query is made to gather<br>this most recent order id using the MAX aggregate function.  This function<br>finds the greatest id in orders where the row&#39;s user_id matches the current<br>session&#39;s user id.  This id is required for entering the user&#39;s purchased<br>items into the OrderItems table.  Upon obtaining this most recent order id,<br>each cart item is entered into the OrderItems table with the obtained order<br>id.  For each item entered, another query is made to the Products<br>table to UPDATE the item&#39;s stock (stock = stock - desired_quantity).  Once<br>the above processes are complete successfully, the user&#39;s cart is cleared and the<br>user is sent to another page with a thank you message and order<br>details.  Note that if one of the above processes fail, the user&#39;s<br>cart will not be cleared and they will not be redirected.  Instead,<br>they will get an error message stating what exactly went wrong during the<br>process.</p><br><p>Screenshot of Price Checking Code Explanation:  The purpose of price checking is<br>to verify whether or not a cart item&#39;s price is the same as<br>the true product price.  In other words, upon checkout, the true product<br>cost should be pulled, not the cart item product cost.  To do<br>this, instead of pulling the unit_price column from cart, I pulled unit_price from<br>product.  I performed an inner join between Cart and Product on the<br>condition that the product id of the cart item equals the product id<br>of the one of the products in the Products table.  This ensures<br>that the pulled price will always be from the Product table, not the<br>Cart table, and therefore the unit_price in the checkout page will always be<br>the true price.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/103">https://github.com/jbq2/IT202-010/pull/103</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/102">https://github.com/jbq2/IT202-010/pull/102</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/101">https://github.com/jbq2/IT202-010/pull/101</a> </td></tr>
<tr><td> <em>Sub-Task 8: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/checkout.php">https://jbq2-prod.herokuapp.com/Project/checkout.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166076713-293dd799-a63d-48e6-b8b2-fb49e74e7f34.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Order Details From Purchase Form and the Thank You Message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <p>Note that this page is separate from order_details.php.  Order_confirmation.php is specifically reserved<br>for display right after a purchase is completed (if accessed via url directly,<br>then the most recent order details are displayed).  </p><br><p>A query is first<br>made to the Orders table to obtain the order id of the most<br>recent order made by the user.  Since this page is displayed specifically<br>after a user has made a purchase, an MAX order id should exist<br>for the user.  Once this is obtained, the order id is specifically<br>saved to a different variable.  This is because this id is important<br>for gathering the items from the OrderItems table associated with that order. <br>Once a second query is made to gather items from the OrderItems table<br>(on the condition that the row&#39;s order_id equals the order id previously obtained),<br>we have all the necessary information to provide the user with their order<br>details.  The following details are displayed: each item&#39;s name, quantity, and subtotal,<br>the overall total, how much money the user spent, the payment method, and<br>the shipping address.  The name the user gave in the order form<br>is also shown via the thank you message.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/104">https://github.com/jbq2/IT202-010/pull/104</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/order_confirmation.php">https://jbq2-prod.herokuapp.com/Project/order_confirmation.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166078447-74dfbab9-1861-407c-bf45-a1a423f6a2d4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Purchase History<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166078468-8fdbcae9-4c41-4606-9a6d-f4c0080c6e46.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Order Details (from Order ID 17)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <p>User roles play a role in the purchase history page, as an Admin<br>or Store Owner has the ability to see all purchase history.  However,<br>more on that will be explained in the next major task in this<br>deliverable.  To obtain all orders that user has made, a query is<br>made to the Orders table with selects the following fields: id, created, total_price,<br>money_received,  and payment method.  All these fields will be displayed in<br>a table for viewing.  One of the restrictions for this milestone is<br>to show the first 10 orders only.  To do this, I run<br>a foreach loop that adds the elements of the $results query to the<br>$orders array.  With each iteration, a $count variable is incremented.  If<br>the count variable equals 10 or exceeds 10, we exit the loop. <br>$orders should have only 10 orders, regardless of how many orders the user<br>actually has.  When making the select query, it is important to order<br>the elements by descending id (this ensures that when adding to $orders, the<br>10 most recent orders are added and not the first 10 orders). <br>To actually create the table, a foreach loop is run to create table<br>rows for each element there is in $orders.  The Order ID column<br>in the table specifically is a clickable link (using an a tag) which<br>sends the user to the order details for that specific order.</p><br><p>When a user<br>clicks on one of the order ids, they are sent to an order<br>details page (order_details.php).  In the order details page, a get request is<br>made to gather the value of the key value pair stored in the<br>url.  This key value pair is sent through the url when the<br>user clicked on one of the order ids from the purchase history page.<br> This value is the order id that the user clicked on, and<br>this allowed me to run a query against the Orders, OrdersItem, and Products<br>table to gather the necessary information to display for the user.  Notice<br>that when selecting from a join of orderitems and products, I pull the<br>unit_price stored inside of orderitems and not from products.  This is important<br>because the product unit_price is the true unit price that is being displayed<br>in the shop_page.  This price may be different from the unit_price of<br>from the order_items table.  Once these queries are made, all information is<br>available to display the user: each purchased item for that order and their<br>quantities and subtotals, each item name (clickable to view more details about them),<br>order total, money spent, payment method, shipping address, and the name associated with<br>the order.</p><br><p>NOTE: in the below heroku prod link for the order_details page, id<br>can be any order number.  17 is just a placeholder to serve<br>as an example.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/108">https://github.com/jbq2/IT202-010/pull/108</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/106">https://github.com/jbq2/IT202-010/pull/106</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/purchase_history.php">https://jbq2-prod.herokuapp.com/Project/purchase_history.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/order_details.php?id=17">https://jbq2-prod.herokuapp.com/Project/order_details.php?id=17</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166080561-37915bdf-9d8b-43e7-a7a3-c32841e5f2e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Purchase History Page Logged in as Admin/Store Owner (Multiple User IDs)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page) (from a user that's not the Store Owner)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166080634-01f78740-6f88-4c0e-a017-c24ae446462d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Order Details Viewable by Admin/Store Owner<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166080682-e0a2ac40-1a47-4b73-83b8-5aeefcc22719.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged in as jbq2 (ID is 4)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166080725-694a03a1-5a37-4280-9151-e52f1f13048c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Viewed Order Item had ID of 13, and Order ID 13 belongs to<br>User ID 34 (jbq2 is able to view other users&#39; purchase history and<br>order details)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <p>This view and feature is built into the normal purchase history page. <br>For a normal user, they can only see their own orders.  For<br>admins/store owners, they can see their own and other user&#39;s purchas histories. <br>This is done through a condition that is checked prior to calling the<br>first query.  The role of the current user is checked.  If<br>the user is an admin or a store owner, the normal query to<br>collect user orders is altered to pull all orders, regardless of who the<br>order belongs to.  This allows the admin/store owner to obtain a purchase<br>history that consists of orders from every single user.  They also have<br>the ability to view a user&#39;s order details, but this is restrictive to<br>an admin/store owner or the user that actually made that order.  If<br>a user tries to access someone else&#39;s order details (through url), they will<br>be sent back to the home page with a message saying &quot;You cannot<br>view other users&#39; order details.&quot;</p><br><p>NOTE: the below heroku links are exactly the same<br>as the ones used for the previous task.  You must be logged<br>in as an admin/store owner to see the special permissions given to such<br>roles in these pages.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/108">https://github.com/jbq2/IT202-010/pull/108</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/107">https://github.com/jbq2/IT202-010/pull/107</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/purchase_history.php">https://jbq2-prod.herokuapp.com/Project/purchase_history.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/Project/order_details.php?id=17">https://jbq2-prod.herokuapp.com/Project/order_details.php?id=17</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166084477-89e4ed69-3849-49f6-81bd-46e33d3db61a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Milestone 3 Complete in proposal.md<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/166084511-36d94967-9d64-4f9c-b099-1573fa018220.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Milestone 3 Features Marked as Done<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-3-shop-project/grade/jbq2" target="_blank">Grading</a></td></tr></table>
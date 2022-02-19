<table><tr><td> <em>Assignment: </em> JavaScript & CSS Challenge</td></tr>
<tr><td> <em>Student: </em> Joshua Quizon(jbq2)</td></tr>
<tr><td> <em>Generated: </em> 2/19/2022 2:15:46 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/javascript-csschallenge/grade/jbq2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ul>
<li>Reminder: Make sure you start in dev and it&#39;s up to date<ol>
<li><code>git checkout dev</code></li>
<li><code>git pull origin dev</code></li>
<li><code>git checkout -b M3-Challenge-HW</code></li>
</ol>
</li>
</ul>
<ol>
<li>Create a copy of the template given here: <a href="https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c">https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c</a> </li>
<li>Implement the changes defined in the body of the code</li>
<li><strong>Do not</strong> edit anything where the comments tell you not to edit, you will lose points for not following directions</li>
<li>Make changes where the comments tell you (via TODO&#39;s or just above the lines that tell you not to edit below)<ol>
<li><strong>Hint</strong>: Just change things in the designated <code>&lt;style&gt;</code> and <code>&lt;script&gt;</code> tags</li>
<li><strong>Important</strong>: The function that drives one of the challenges is <code>updateCurrentPage(str)</code> which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.</li>
</ol>
</li>
<li>Create a branch called M3-Challenge-HW if you haven&#39;t yet</li>
<li>Add this template to that branch (git add/git commit)</li>
<li>Make a pull request for this branch once you push it</li>
<li>You may manually deploy the HW branch to dev to get the evidence for the below prompts</li>
<li>Create a new file <strong>m3_submission.md</strong> file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)</li>
<li>Add, commit, and push the submission file</li>
<li>Close the pull request by merging it to dev (double-check all looks good on dev)</li>
<li>Manually create a new pull request from dev to prod (i.e., base: prod &lt;- compare: dev)</li>
<li>Complete the merge to deploy to production</li>
<li>Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Completed Challenge Screenshots </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Primary page with the checklist items completed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154814885-282df6ec-f26b-4dc1-94ac-4e8df1586ca9.pnghttps://user-images.githubusercontent.com/98120760/154810182-955db11b-5a8e-48ac-b743-3dce5affbc42.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of primary page (nav bar links have not been clicked yet).<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154810327-e391427a-7872-4859-a40b-2341943d84c9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot shows my code for changing the list style type to show<br>checkmarks instead of bullets.  In CSS, I selected a &quot;li&quot; element with<br>a &quot;ul&quot; parent with a &quot;li&quot; parent with a &quot;ul&quot; parent.  This<br>allowed me to edit the style of the specific list that followed the<br>specified selector (ul &gt; li &gt; ul &gt; li).  &#39;\2713&#39; is number<br>for the checkmark style type.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot showing after the login link is clicked (be sure to include the url)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154815035-38fd50f5-6e22-4166-84d6-61b457ce5f2a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of page after login link is clicked.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154810644-ad88e65d-5ad4-4a06-af2d-deca341eb61e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of code to make changes to page when login is clicked (specific<br>block in green box).  Briefly, navLinks holds an array of elements with<br>an <a> tag.  navLinks[0] is the index of the login link, so<br>I added an EventListener which detects a click on that specific element. <br>If clicked, the script inside the curly braces is run which updates <h1><br>and <title> with the value of selection.  This process is used for<br>the other links.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot showing after the register link is clicked (be sure to include the url)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154815088-04856c6e-4885-45fe-b50c-e45c7db97e17.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of page after register link is clicked.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154810870-b8eaf24a-39da-4a62-8b1c-0e9939de5a7b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of code to make changes to page when register is clicked (specific<br>block in green box).  The login link process was used for the<br>register link process, except the navLinks element used is navLinks[1] (corresponds to the<br>register <a> tag). <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Screenshot showing after the profile link is clicked (be sure to include the url)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154815120-da6fac37-3e1d-4b0b-b105-42e3b04512ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of page after profile link is clicked.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154811052-10e9ee72-7e4d-4909-9f7e-3ec0f16d5c84.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of code to make change to page when profile is clicked (specific<br>block in green box).  The login link process was used for the<br>profile link process, except the navLinks element used is navLinks[2] (corresponds to the<br>profile <a> tag).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Screenshot showing after the logout link is clicked (be sure to include the url)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154815164-def90ccc-cc87-4c3e-b690-4110314930fd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of page after the logout link is clicked.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/154811183-baf9cfad-50ec-481d-86a8-a9efde2ef219.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of code to make change to page when logout is clicked (specific<br>block in green box).  The login link process was used for the<br>logout link process, except the navLinks element used is navLinks[3] (corresponds to the<br>logout <a> tag).<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Explain Solutions (Grader use this section to determine completion of each challenge) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly explain how you made the navigation horizontal</td></tr>
<tr><td> <em>Response:</em> <p>Horizontal navigation is determined by the &#39;display&#39; property.  The navigation <li> elements<br>are separated by line breaks by default.  There are two options to<br>change this--&#39;display: inline&#39; and &#39;float: left&#39;.  In my code, I used &#39;float:<br>left&#39; which allows the block elements to float next each other to the<br>left side of their container.  This takes away the default line breaks.<br> I also used &#39;display: block&#39;, which is a display property that allowed<br>me to change the padding of the elements.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how you remove the navigation list item markers</td></tr>
<tr><td> <em>Response:</em> <p>To remove the navigation list item markers, which I assumed were the bullet<br>points before each word, I selected <ul> elements with a <nav> parent element.<br> Inside this block, I set the list-style-type to none which removes the<br>bullets.  To isolate this in the navigation bar,  I selected more<br>specific <li> elements with a <ul> parent, a <li> grandparent, and a <ul><br>great grandparent.  These are the list elements that consist of the main<br>content of the page (the requirements to get points in this homework assignment).<br> Within this block, I set the list-style-type to &#39;\2713&#39;--checkmarks.  This only<br>applies to ul &gt; li &gt; ul &gt; li, and the navigation bar<br>list elements are not included in ul &gt; li &gt; ul &gt; li.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you gave the navigation a background</td></tr>
<tr><td> <em>Response:</em> <p>To give the navigation a background, I had to select the specific navigation<br>links that I wanted to make changes to.  This selection is &#39;nav<br>ul li a&#39;, which selects <a> elements that are inside of <li> elements<br>that are inside of <ul> elements that are inside of <nav> elements. <br>This allows me to specifically choose the navigation bar links to customize. <br>Inside this block, I changed the background color of each <a> element (which<br>make up the navigation bar) with &#39;background-color: #31374D&#39;.  This color is a<br>very unsaturated navy blue.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how you made the links (or their surrounding area) change color on mouseover/hover</td></tr>
<tr><td> <em>Response:</em> <p>In my code, I changed the background color of the specific link when<br>you hover over it with your cursor.  To do this, I selected<br>the specific elements that I want to check for mouse hover.  These<br>elements are the <a> elements (nav ul li a).  To check for<br>mouse hover, I used the &#39;:hover&#39; selector for &#39;nav ul li a&#39;. <br>Within this block, the I would change the background-color to #2A2B32--very dark and<br>unsaturated navy blue.  Note that the &#39;:hover&#39; selector runs the following script<br>ONLY on mouse hover.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you changed the challenge list bullet points to checkmarks (✓)</td></tr>
<tr><td> <em>Response:</em> <p>To change all the bullet points inside the &#39;Challenges&#39; list, I had to<br>select the <li> elements inside of the &#39;Challenges&#39; list but not the navigation<br>bar.  I selected the sub bullet points with &#39;ul &gt; li &gt;<br>ul &gt;li&#39;.  Inside this block, I set the list-style-type to &#39;\2713&#39; which<br>changes the default bullet points to checkmarks.  Selecting the main bullet points<br>of &#39;Challenges&#39; was a little trickier because &#39;ul &gt; li&#39; also exists inside<br>of <nav>.  To work around this, I specified the list inside of<br><nav> to be none (list-style-type: none).  This overrides the list-style-type change of<br>the more general &#39;ul &gt;li&#39; selector.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain how you made the first character of the h1 tags and anchor tags uppercased</td></tr>
<tr><td> <em>Response:</em> <p>To capitalize the anchor tags, I used the &#39;nav ul li a&#39; selector<br>to make changes to the specific <a> elements in the navigation bar. <br>Inside this block,  I transformed the text with &#39;text-transform: capitalize&#39;, which automatically<br>makes the first character of the <a> element content uppercased.  As for<br>the h1 tag, I followed a similar process by selecting a <h1> element<br>and then transforming the text with &#39;text-transform&#39;.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain/describe your custom styling of your choice</td></tr>
<tr><td> <em>Response:</em> <p>I made a few small changes to the overall style of the webpage.<br> The first change I made was to stretch the navigation bar from<br>end to end, thus making it wider.  The second change I made<br>was to change the font to Courier and font color to a very<br>light peach color.  The last change to compliment the change in font<br>color was to change the color of the background to a desaturated blue.<br> Combined with the other colors of the page, this creates a Blue<br>Dark Mode vibe that still has good contrast between the foreground and background<br>elements.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain how the styling for the challenge list doesn't impact the navigation list</td></tr>
<tr><td> <em>Response:</em> <p>The strategy to isolate the changes between the navigation list and challenge list<br>is to override the changes to the general elements.  In my case,<br>I ran into an issue where the checkmarks would display for the navigation<br>bar as well as the challenge list.  To prevent this, I used<br>the selector &#39;nav &gt; ul &gt; li&#39; which selects specific <li> elements with<br>a <ul> parent and a <nav> grandparent.  The <li> elements of the<br>challenge list does not have a <nav> grandparent, and so the changes to<br>the navigation bar components did not affect the challenge list components.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Briefly explain how you updated the content of the h1 tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>The updateCurrentPage() function sends updates to the h1 tag.  Inside of the<br>getCurrentSelection() function, I added logic to check for a click on one of<br>the links in the navigation bar.  I created a navLinks variable that<br>holds an array consisting of the list items inside the <nav> element. <br>For each element inside of the array, I added an event listener to<br>check for a click event.  Once a click event occurs in one<br>of the links, I set the selection variable to the innerText of the<br>navLink element and called the updateCurrentPage() function, passing the updated selection variable as<br>an argument.  updateCurrentPage then changes the h1 tag.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain how you updated the content of the title tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>The updateCurrentPage() function also sends updates to the title tag.  The same<br>logic from the h1 tag change is used.  When updateCurrentPage() is called,<br>it changes the title tag to the updated selection variable.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Comment briefly talking about what you learned and/or any difficulties you encountered and how you resolved them (or attempted to)</td></tr>
<tr><td> <em>Response:</em> <p>I learned so much from this assignment.  Coming from a background of<br>only back-end programming, this was all new to me and it was quite<br>overwhelming at first.  However, after an hour of reading about CSS selectors<br>and syntax, I started to get the hang of the process.  During<br>the styling section, I had an issue where the checkmarks would show for<br>the elements in the navigation bar when they should only for the elements<br>in the challenge list.  To resolve this, I used the strategy of<br>using the &#39;nav ul li&#39; selector to isolate the changes I wanted to<br>make to the navigation bar.  This selector also allowed me to override<br>any general changes to the <ul> <li> elements inside of the challenge list.<br> The last major difficulty I had was with updating the current page<br>upon clicking one of the links.  I tried iteration, but I found<br>that I would encounter an error because navLinks[i] (where i is the index)<br>would return a null value which cannot be read from.  I came<br>up with a workaround that checks for each navLinks array element individually. <br>With each element in navLinks, I added an event listener to wait for<br>a click even to occur.  Once it did, it ran its corresponding<br>script.  For example, navLinks[0] (login link) upon being clicked would call updateCurrentPage()<br>and passing selection (holds innerText of navLinks[0]) as an argument.  This changes<br>both the title and h1 tag.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your pull request (hw branch to dev only)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/16">https://github.com/jbq2/IT202-010/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to your solution html file from prod (again you can assume the url at this point)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/M3/challenge.html">https://jbq2-prod.herokuapp.com/M3/challenge.html</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/javascript-csschallenge/grade/jbq2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Assignment: </em> M2 PHP-HW</td></tr>
<tr><td> <em>Student: </em> Joshua Quizon(jbq2)</td></tr>
<tr><td> <em>Generated: </em> 2/12/2022 11:12:17 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/m2-php-hw/grade/jbq2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <p>Make sure you have the dev/prod branches created before starting this assignment.</p>
<p>Setup steps:</p>
<ol>
<li><code>git checkout dev</code> </li>
<li><code>git pull origin dev</code></li>
<li><code>git checkout -b M2-PHP-HW</code></li>
</ol>
<p>You&#39;ll have 3 problems to save for this assignment.</p>
<p>Each problem you&#39;re given a template <strong>Do not edit anything in the template except where the comments tell you to</strong>.</p>
<p>The templates are done in such a way to make it easier to capture the output in a screenshot (if it&#39;s still not able to fit well, you can zoom out in your browser).</p>
<p>You&#39;ll copy each template into their own separate .php files, immediately git add, git commit these files (you can do it together) so we can capture the difference/changes between the templates and your additions. This part is required for full credit.</p>
<p>HW steps:</p>
<ol>
<li>Open VS Code at the root of your repository folder (you should see the Procfile and all from the Heroku setup)</li>
<li>In VS Code create a new folder/directory in public_html called M2</li>
<li>Create 3 new files in this new M2 folder (problem1.php, problem2.php, problem3.php)</li>
<li>Paste each template into their respective files</li>
<li><code>git add .</code></li>
<li><code>git commit -m &quot;adding template baselines</code></li>
<li>Do the related work (you may do steps 8 and 9 as often as needed or you can do it all at once at the end)</li>
<li><code>git add .</code></li>
<li><code>git commit -m &quot;completed hw&quot;</code></li>
<li>When you&#39;re done push the branch<ol>
<li><code>git push origin M2-PHP-HW</code></li>
</ol>
</li>
<li>Go to heroku dev, and manually deploy the M2-PHP-HW branch</li>
<li>After it deploys go to <a href="https://ucid-dev.herokuapp.com/M2/problem1.php">https://ucid-dev.herokuapp.com/M2/problem1.php</a> (replace ucid with your ucid if you followed the setup instructions)</li>
<li>Update the URL to check that each problem file displays properly</li>
<li>Create the Pull Request with <strong>dev</strong> as base and <strong>M2-PHP-HW</strong> as compare</li>
<li>Create a new file in the M2 folder in VS Code called m2_submission.md</li>
<li>Fill out the below deliverable items, save the submission, and copy to markdown<ol>
<li>For this assignment you may get screenshots from your heroku dev instance, you do not need to move it to prod then come back and update it</li>
</ol>
</li>
<li>Paste the markdown into the m2_submission.md</li>
<li>add/commit/push the md file<ol>
<li><code>git add m2_submission.md</code></li>
<li><code>git commit -m &quot;adding submission file&quot;</code></li>
<li><code>git push origin M2-PHP-HW</code></li>
</ol>
</li>
<li>Merge the pull request from step 14</li>
<li>Create a new pull request with prod as base and dev as compare</li>
<li>Immediately create/merge/confirm, this is just to deploy it to prod and you don&#39;t need to adjust anything during this step</li>
<li>On your local machine sync the changes<ol>
<li><code>git checkout dev</code></li>
<li><code>git pull origin dev</code></li>
</ol>
</li>
<li>Submit the link to the m2_submission.md file from the prod branch to Canvas</li>
</ol>
<p><strong>Template Files</strong>
You can find all 3 template files in this gist: <a href="https://gist.github.com/MattToegel/48b48377eaa1937c886b7840c449750a">https://gist.github.com/MattToegel/48b48377eaa1937c886b7840c449750a</a> </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Problem 1 - Only output Odd values of the Array under "Odds output" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Clearly screenshot the output of Problem 1 showing the data and the code output in the proper part of the page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/153688787-1907ffaf-6603-4c6a-8eb6-de443d4ffbe8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of output.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/153688910-efdaa7c6-9453-4a34-9eda-12b77814fd96.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of code.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>To solve the above problem, I created a second array to store the<br>odd values only.  While I looped through $arr, I checked each element<br>to see if it was odd.  The modulus operator is a great<br>way to check the evenness or oddness of numbers, as it returns the<br>remainder of the dividend which is being divided by the divisor.  This<br>means that an odd number modulo 2 = 1 for all odd numbers.<br> This is the basis of my comparison, and if $arr[i] % 2<br>= 1, then that element would be pushed into $oddArr.  After iterating<br>through $arr, I looped through $oddArr to echo each element separated by a<br>space.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Problem 2 - Only output the sum/total of the array values by assigning it to the $total variable (the number must end in 2 decimal places, if it ends in 1 it must have a 0 at the end) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Clearly screenshot the output of Problem 2 showing the data and the code output in the proper part of the page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/153689186-930d3060-1e86-4abf-af11-c1dd4d7fa5e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of output.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/153689235-63c56a18-46da-4cd1-889f-985675292a7d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of code.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>Solving the second problem also required some sort of iteration.  In this<br>case, I used a while loop.  I found no reason to use<br>it over the for loop, but I wanted to use it for the<br>sake of trying it out.  To iterate using a while loop, I<br>created an int variable named $i and set it to 0; similar to<br>what I would do when creating a variable inside of the for loop.<br> For each iteration inside the while loop, I incremented $i.  Before<br>this incrementation, I would set the value of $total to $total + $arr[i].<br> In other words, I would add the current value of total to<br>the array element in question and set the sum to total.<br>Printing out the<br>values required some research, as printing out a float does not include trailing<br>zeroes.  I decided to change $total to a string, therefore it would<br>be forced to print out the trailing zeroes.  However, I found that<br>var_export would print the sum of each array enclosed in single quotes. <br>To prevent, I did not use var_export.  The program ended up printing<br>the same message but without each sum enclosed in single quotes.  After<br>printing the sum, $total is set back to a float just in case<br>it would have to be used in any other calculations.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Problem 3 - Output the given values as positive under the "Positive Output" message (the data otherwise shouldn't change) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Clearly screenshot the output of Problem 3 showing the data and the code output in the proper part of the page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/153689718-91dd7158-7edf-44a2-b0bf-b237228d3e47.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of output.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/153689758-6d77de5f-9769-4e38-95dc-892c4eb3551b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of code (including UCID, Course, Date, etc.)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/153689795-79a46633-b163-49ed-9023-32f47f7d6fc7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of rest of code (including for loop to echo positive values).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>The final problem required some work around for dealing with non-primitive types (string<br>in this case).  The solution follows a similar structure to the other<br>solutions, requiring iteration of $arr.  The else block handles the case in<br>which the array value is an integer or float (the easy case). <br>The if block handles a case in which the value is a string.<br> To check for this, I used the strcmp function which compares two<br>strings.  I found that gettype returns the type of a value in<br>the form of a string.  From this, I decided to use strcmp<br>and have the arguments of gettype($arr[$i]) (returns the type of the array element)<br>and &quot;string&quot;.  If the array element is a string, gettype returns &quot;string&quot;,<br>which is compared to &quot;string&quot;.  If the two strings are equal (strcmp<br>returns a 0), then we enter the if statement.  The body of<br>the if block is nearly the same as the body of the else<br>block--the only difference being that the array element that is a string would<br>have to be first casted as an integer.  Inside each body, the<br>value is checked to be less than 0.  If so, we multiply<br>the array element by -1 (turning positive), then pushing it into $posArr. <br>Otherwise (it is already positive), we simply push the element to $posArr without<br>manipulating it.<br>Finally, the final for loop in this function echoes each element inside<br>of $posArr which at this point should contain of all positive values.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Misc Items </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add the prod URL for problem1.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/M2/problem1.php">https://jbq2-prod.herokuapp.com/M2/problem1.php</a> </td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the prod URL for problem2.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/M2/problem2.php">https://jbq2-prod.herokuapp.com/M2/problem2.php</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the prod URL for problem3.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/M2/problem3.php">https://jbq2-prod.herokuapp.com/M2/problem3.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Pull Request URL for M2-PHP-HW to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/9">https://github.com/jbq2/IT202-010/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Talk about what you learned, any issues you had, how you resolve them</td></tr>
<tr><td> <em>Response:</em> <p>I believe my only major issue in this homework assignment was with problem<br>2.  I found that when you echo a float variable, the resulting<br>printed statement does not inlude trailing zeroes that the float has.  My<br>solution to this was to initially turn the contents of $total into a<br>string.  That block of code checks if there are two decimals after<br>the decimal point.  If not, the code would append zeroes to the<br>string.  However, I found another issue with printing a string, and it<br>was that var_export resulted in a print statement that enclosed the sum in<br>single quotes.  To fix this, I decided not to use var_export in<br>the echo statement.  This fixed the issue.  After printing the value,<br>I casted $total back to a float in case of future calculations with<br>it.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/m2-php-hw/grade/jbq2" target="_blank">Grading</a></td></tr></table>
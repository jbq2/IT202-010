<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Joshua Quizon(jbq2)</td></tr>
<tr><td> <em>Generated: </em> 3/25/2022 6:25:10 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/hw-html5-canvas-game/grade/jbq2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Create a branch for this assignment called <em>M6-HTML5-Canvas</em></li>
<li>Pick a base HTML5 game from <a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li>
<li>Create a folder inside public_html called  <em>M6</em></li>
<li>Create an html5.html file in your M6 folder (do not put it in Project even if you&#39;re doing arcade)</li>
<li>Copy one of the base games (from the above link)</li>
<li>Add/Commit the baseline of the game you&#39;ll mod for this assignment <em>(Do this before you start any mods/changes)</em></li>
<li>Make two significant changes<ol>
<li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li>
<li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li>
<li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li>
</ol>
</li>
<li>Evidence/Screenshots<ol>
<li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li>
<li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li>
<li>Remember to include your ucid/date as comments in any screenshots that have code</li>
<li>Ensure your screenshots load and are visible from the md file in step 9</li>
</ol>
</li>
<li>In the M6 folder create a new file called m6_submission.md</li>
<li>Save your below responses, generate the markdown, and paste the output to this file</li>
<li>Add/commit/push all related files as necessary</li>
<li>Merge your pull request once you&#39;re satisfied with the .md file and the canvas game mods</li>
<li>Create a new pull request from dev to prod and merge it</li>
<li>Locally checkout dev and pull the merged changes from step 12</li>
</ol>
<p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>I chose to modify the Arcade Shooter game.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jbq2-prod.herokuapp.com/M6/html5.html">https://jbq2-prod.herokuapp.com/M6/html5.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jbq2/IT202-010/pull/38">https://github.com/jbq2/IT202-010/pull/38</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>Upon realizing that the game has a rather slow start, and is even<br>still pretty slow when you reach a higher score, I decided to make<br>it a little more intense.  To do this, I chose to increase<br>the general spawn rate of the enemies.  In addition, to compensate for<br>the increase in difficulty, I slightly lowered the base speed of enemies. <br>I believe this still makes the game fair, and a lot more fun<br>because the player can get overwhelmed.  This implies that the game&#39;s intensity<br>is overall increased which provides a greater challenge for the player.  The<br>following screenshots show pictures of the applied change in the game and the<br>code that was written/manipulated to make that change.  Each picture includes a<br>caption as well.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160208117-4d8543c7-c84a-4cd8-ba89-c90a6b4a415e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The picture shows 4 enemy objects moving toward the player.  In the<br>original version of the game, only one player spawns at a time,<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160208406-594d2f95-ef96-4cf7-8361-1b3415696a22.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CHANGE 1.0; explained in code comments<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160208596-2e0226f2-1987-49a7-9fc5-85bdfe12b51d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CHANGE 1.1; explained in code comments<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160208737-0bf1b6c7-33c2-4f49-a576-f5f1a385ffb1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CHANGE 1.2; explained in code comments<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>The next change I made was to compensate for the overall increase in<br>game difficulty from the first modification.  I added a lives feature. <br>In the original version, the game would end as soon as an enemy<br>hit the player or hit the player-side wall.  Even though the game<br>was quite easy in the original version, I thought adding a lives feature<br>would increase the playability duration of the game.  Combined with the first<br>modification, the game seems more difficult while also being more forgiving. The following<br>screenshots show pictures of the applied change in the game and the code<br>that was written/manipulated to make that change.  Each picture includes a caption<br>as well.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160209026-e7ee605a-e8d7-42dd-b3ee-eca854abbf21.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>3 lives.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160209087-266ad3da-d207-455d-b82f-da6c3356a919.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>2 lives.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160209162-6b83458e-d2a5-4de7-9d8b-fa7ffc5c5680.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>1 life.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160209209-e61856bc-8b63-4058-83fc-a1b314b544e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Game over when life count reaches 0.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160209299-7985e18c-e715-467a-89ad-e3c8289e2589.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CHANGE 2.0; explained in code comments<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160209374-f635d12a-74ee-4fd9-b657-b1332ad4b6b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CHANGE 2.1; explained in code comments<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120760/160209432-2dd5ec16-0303-417e-bef7-35634a8262dd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CHANGE 2.2; explained in code comments<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I feel like a learned a lot of syntax and function related aspects<br>of HTML5.  During winter break, I actually studied some Tkinter--a Python package<br>for basic UI development.  The concepts I learned from that (though very<br>few) helped me understand a lot of the conceptual aspects of HTML5 Canvas.<br> For example, I had an issue where the game would immediately end<br>upon an enemy touching the player of the player-side wall, despite there being<br>a lives variable.  I had this experience in Tkinter, and to fix<br>that issue, I deleted the object as soon as it made contact with<br>another object.  This allowed any code relating ot the collision of two<br>objects to only occur once rather than multiple times due to the two<br>objects being in contact with each other for quite a while.  I<br>applied this same fix in HTML5 Canvas and found that it worked. <br>In addition to finding parallels, it was a great experience familiarizing myself with<br>the syntax and structure of JavaScript.  I keep forgetting that variables are<br>type dynamic, which is quite a difference for someone who has a huge<br>background in Java.  I also learned how to actually create objects in<br>HTML5 Canvas, which again, is quite similar to the way you make objects<br>in Python Tkinter.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/hw-html5-canvas-game/grade/jbq2" target="_blank">Grading</a></td></tr></table>
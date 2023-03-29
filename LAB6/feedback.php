
<h1>Enter Data</h1>
<form method="POST" action="thankyou.php" >
Name: <input type="text" name="complete_name" /><br />
Email Address: <input type="email" name="email" /><br />
Program:
<select name="type">
<option value="Inquiry">Inquiry</option>
<option value="Feedback">Feedback</option>
<option value="Other">Other</option>
</select>
<br />

Satisfaction: <input type="range" name="satisfaction_level" min="0" max="10" value="0" oninput="this.form.amountInput.value=this.value" />
<input type="number" name="amountInput" min="0" max="10" value="0" oninput="this.form.satisfaction_level.value=this.value" /><br>
Feedback Message: <br><textarea rows="6" cols="50" name="message"></textarea><br><br>
<button>Submit</button>
</form>


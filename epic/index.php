<!DOCTYPE html>
<html>
	<head>
		<title>
			Data-Design-JerushaLoops
		</title>

	<body>

		<h2>Persona</h2>
		<p>
		<ol >
			<li><strong>Purpose:</strong>To find a site to upload crafts for point of sale that easy to use and update</li>
			<li><strong>Audience:</strong> A single mother and needs a personal website for her custome crochet items</li>
			<li><strong>Goal:</strong>to streamline the conversation between her and her customer. Streamlining the process between Consultation, Quote and Payment.</li>
		</ol>

		</p>
		<p>
		<ul>
			<li><strong>Name:</strong>Jerusha Rodney</li>
			<li><strong>Age:</strong>27</li>
			<li><strong>Job:</strong>Stay at home mom/Sells crochet items on the side</li>
			<li><strong>Technology:</strong>Smartphone, Internet, Laptop.</li>
			<li><strong>Frustration:</strong> right now she doesnt have one place to showcase and sell her items.</li>
		</ul>
		</p>



		<h2>Use Case</h2>
		<p>Customer wants a middle application between her consultation and selling stage of her projects. The way she is doing it now, she keeps in contact with her customer through
			emails social networking and texting.  She has a personal website that shows a gallery of her work, but she cant do a point of sale, she cant update it for change she wants a page
			that has all of that and more in one place.</p>

		<h2>Interaction Flow</h2>
		<p><strong>Registration</strong></p>
		<ol>
			<li>At the website she clicks on the register button
				<ol>
					<li> she can use her face book or google to sign in </li>
					<li> she can also write in all her information without social media</li>
					<li>she decides to fill in her information</li>
				</ol>
			</li>
			<li> She fills in her information
				<ol>
					<li>Types her first name in form</li>
					<li>Types her last name in form</li>
					<li>she creates a password and confirms password</li>
					<li>she creates a username</li>
				</ol>
			</li>
			<li>After all information is updated she clicks on the register button</li>
			<li> she then clicks the "Sell on etsy" link in the top right of the webpage
				<ul>
					<li>This will bring her to another page where a button "open your Etsy Shop" is in the middle.</li>
				</ul>
			</li>
			<li>She clicks on "open your Etsy Shop"</li>
			<li> This brings her to a Shop Preferences Page
				<ol>
					<li>She choosed the shop language</li>
					<li> she chooses the shop country</li>
					<li> She chooses the shop currency</li>
					<li> she chooses " I sell part-time but hope to sell full time" from the" Which of these best descrbes you" option</li>
				</ol>
			</li>
			<li> She clicks the save and continue button which brings her to Name your shop
				<ol>
					<li>she types in her name</li>
					<li>her name is available</li>
					<li>she clicks save and continue</li>
				</ol>
			<li>she is prompted to a "Stock your shop page" where she adds photos by clicking on ad listing
				<ol>
					<li>after clicking ad listing she is brought to a page to upload up to 10 photos</li>
					<li>she creates a title for the item</li>
					<li>she selects i did  from the who mad this </li>
					<li> she picks I'll renew expired listings myself</li>
					<li> she picks tangible item that you will ship to buyers as her type
					<li>she adds a description</li>
					<li> she clicks save and continue</li>
					<li> she puts in her tags to identify her items</li>
					<li> she puts in material used for item</li>
					<li> she adds a price</li>
					<li> she adds the quantity</li>
					<li> she sets the shipping cost to be calculated for her</li>
					<li> she enters zip</li>
					<li> she set process time for 1-2 business days</li>
					<li> she specifies the countries she will ship</li>
					<li> she specifies her shipping service</li>
					<li> she puts in weigh of item</li>
					<li> she puts in item package size
					<li> she repeats these steps until all her items are filled</li>
					<li> once done she clicks save and continue</li>
				</ol>
			<li> she is brought to the how you get paid page
				<ol>
					<li>she picks her state </li>
					<li>she puts in her personal information including social </li>
					<li> she  puts in her billing address</li>
					<li> she puts in checking information</li>
					<li> then clicks continue and save </li>

				</ol>
			</li>
			<li>she is brought to setup and billing
				<ol>
					<li>she puts in her credit card information</li>
					<li> She puts in her billing address </li>

				</ol>

			</li>
			<li>she presses the button open shop button</li>
			<li> shop is open</li>
			<li> To set the identity for her profile she can then edit profile</li>
			<li> To use shop and monitor she has to go to the top left corner and  click shop manager button</li>
		</ol>
		<p>Creating Profile</p>
		<ol>
			<li>she has three places to upload photos for her buisness identity
			<li>Main page profile photo</li>
			<li>company owner photo </li>
			<li>cover photo for page</li>
		</li>
		</ol>
		<table>
			<thead>
				<th>Profile</th>
				<th>Item</th>

			</thead>
			<tr>
				<td>ownerName</td>
				<td>itemPhoto</td>
			</tr>
			<tr>
				<td>ownerPassword</td>
				<td>itemTags</td>
			</tr>
			<tr>
				<td>userName</td>
				<td>itemDescription</td>
			</tr>
			<tr>
				<td>shopLanguage</td>
				<td>itemMaterial</td>
			</tr>
			<tr>
				<td>shopCountry</td>
				<td>itemPrice</td>
			</tr>
			<tr>
				<td>shopCurrancy</td>
				<td>itemQuantity</td>
			</tr>
			<tr>
				<td>shopName</td>
				<td>itemShipping</td>
			</tr>
			<tr>
			<td>profilePhoto</td>
			</tr>
			<tr>
			<td>profileCover</td>
			</tr>
			<tr>
			<td>ownerPhoto</td>
			</tr>
			</ul>
		</table>
		<h3><strong>Relation</strong></h3>
		<ul>
			<li>
			one profile per account
			many Items per profile
			10 photos per Item
			</li>
		</ul>


		</p>
		</ol>






	</body>
</html>
</head>


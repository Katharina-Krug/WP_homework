# WP_homework
This Webpage is another version of the IB's (Interationaler Bund) Website.

URL: https://www.krugprojects.de 
GitHub: https://github.com/Katharina-Krug/WP_homework 

 


In the picture above you can see what the user will see first when opening the website. The nice picture should create interest in the rest of the website. 

 

The Navigation Bar has 7 items representing the 7 pages:
1.	Home
2.	Development Cooperation
3.	International Migration Services
4.	International Youth Work
5.	International Networks and Alliances
6.	Voluntary Services
7.	Contact form

You can also see the side bar which is visible on every page.
It contains a search bar, which is a Google search form:  
 
Below the search bar, there is a webviewer showing the original website. Directly under this small window there is also the link to the webpage. 

 
Next, there are three Social Media links leading to IB’s Youtube Channel, LinkedIn and Facebook page. This way users can get interested on one of the pages and can quickly go to their preferred social media channel to follow the IB’s page Facebook, LinkedIn or Youtube. 

 



Lastly, there is the contact form, which leads after validation and submitting to the 7th page named contact form. The server side validation is done via isset(), !empty() and preg_match($re,$_POST['email'] for the mail.

There the new message will be displayed:

 








If other messages already had been sent through the session, they will be display as well: 
 


If there hasn’t been any new contact form input, but the user clicks the contact form page, the user won’t see the “You received the following from the contact form”, but “Your last messages”:

 

If there are no messages in this session yet, the following will be displayed: 

 


The required videos can be found under “Home” (Youtube) and “Development Cooperation” (file):

  
For the different networks and alliances under the page “International Networks and Alliances” I used toggle bars making it look more tidy: 

 

The footer contains the Copyright and the Name of the non-profit organization “International Bund”:
 

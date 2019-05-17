# first
assignment1
q1.User login. You may use hard coded user credentials for demonstration purpose.
q2.Upon login, generate session identifier and set as a cookie in the browser.
At the same time, generate the CSRF token and store it in the server side. You may store it
in-memory. The CSRF token is mapped to the session identifier.
q3.In the website, implement an endpoint that accepts HTTP POST requests and respond with
the CSRF token. The endpoint receives the session cookie and based on the session
identifier, return the CSRF token value.
q4.Implement a webpage that has a HTML form. The method should be POST and action
should be another URL in the website. When this page loads, execute an Ajax call via a
javascript, which invokes the endpoint for obtaining the CSRF token created for the
session.
q5.Once the page is loaded, modify the HTML form’s document object model (DOM) and
add a new hidden field that has the value of the received CSRF token.
q6.Once the HTML form is submitted to the action, in the server side, extract the received
CSRF token value and check if it is the correct token issued for the particular session. You
this, you need to obtain the session cookie and get the corresponding CSRF token for the
q7.session and compare that with the received token value.
q8.If the received CSRF token is valid, show success message. If not show error message.
language is php.

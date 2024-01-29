# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Bhargavi Murari

**Email**: muraribi@mail.uc.edu
![Bhargavi's headshot](../../images/headshot.jpg)
## Repository Information
Repository's URL: [https://github.com/BhargaviMurari22/waph-muraribi.git](https://github.com/BhargaviMurari22/waph-muraribi.git)
## Lab1's Report:
## Lab 1 - Foundations of the Web 
## The lab's overview and outcomes:

## Part I - The Web and HTTP Protocol
### Task 1. Familiar with the Wireshark tool and HTTP protocol

 I used Mozilla Firefox to search for "http://example.com" on a website and started Wireshark using the "any" option. Once the HTTP stream was accessible, Wireshark showed the HTTP requests and responses. Through the capture and presentation of the network traffic related to the web browsing activity, this made it possible to examine in detail the communication that took place between my machine and the web server.

![IMAGE-1](../../images/IMAGE-1.png)
HTTP Request
![IMAGE-2](../../images/IMAGE-2.png)
HTTP Response
![IMAGE-3](../../images/IMAGE-3.png)
HTTP Stream


### Task 2. Understanding HTTP using telnet and Wireshark

To use Telnet to perform HTTP tests, I entered "$telnet example.com 80" on my terminal. Following that, I typed the instructions' "GET /index.html HTTP/1.0" and "Host: example.com" commands. The HTTP request I had made and the response I received from the server were then shown by the command prompt, giving me a glimpse of the exchange that was taking place between the computer and the example.com web server.

  1. A screenshot of your terminal showing the HTTP Request and HTTP response from the server.
![IMAGE-4](../../images/IMAGE-4.png)
Terminal with Telnet

  2. REQUEST: The HTTP request sent in Wireshark Task 1 is similar to the snapshot that was taken using Telnet. Although Wireshark offers more detailed information, Telnet queries still include necessary components such as the host site, HTTP version, and "GET" method. Beyond the fundamental elements observed in Telnet, Wireshark's expert details include information regarding the "GET" request, severity levels, and arranged groupings.
![IMAGE-5](../../images/IMAGE-5.png)
Telnet Request

  3. RESPONSE: The host site's HTTP version and a successful "200 OK" status are displayed in the Telnet snapshot, which is a reflection of the HTTP response from Wireshark Task 1. Nevertheless, Wireshark goes above and above by offering a wealth of information, such as Response version, Status code, Response Phrase, content type, date of update, content length, and time and date of expiration. All in all, Wireshark provides a more thorough analysis of every answer line than Telnet does for the crucial information.
![IMAGE-6](../../images/IMAGE-6.png)

## Part II - Basic Web Application Programming

###   Task 1: CGI Web applications in C

   a. I edited my C program in Sublime Text, compiled it with "gcc," and ran the executable on the web server using specific commands. The iterative process ensured code modifications were tested and deployed effectively.
 ```
   #include <stdio.h>
int main(void) {
printf("Content-Type: text/plain; charset=utf-8\n\n");
printf("Hello World CGI! From BHARGAVI, WAPH\n\n");
return 0;
}
```
![IMAGE-7](../../images/IMAGE-7.png)

   b. The "index.c" file's structure is shown in a screenshot, which also features a URL the professor gave.
   ```
   #include<stdio.h>
int main(void)
{
printf("Content-Type: text/html\n\n");
printf("<html><head><h1>Name: BHARGAVI MURARI</h1><h2>DEpartment: INFORMATION TECHNOLOGY</h2><p>This is web programming Hands-on lab</p></head></html>");
return 0;
}
```
 ![IMAGE-8](../../images/IMAGE-8.png)  
 
###  Task 2: A simple PHP Web Application with user input.

a. I created a "helloworld.php" file in Sublime Text, used the command "$ sudo cp helloworld.php /var/www/html" to move it to the web server, then used a browser to view it locally.
```
<?php
echo "Hello World, this is the first PHP by Bhargavi, WAPH";
phpinfo();
?>
```
 
b. I created a "echo.php" file in Sublime Text, used the command "$ sudo cp echo.php /var/www/html" to move it to the web server, then used a browser to view it locally.
```

```

### Task 3 (10 pts). Understanding HTTP GET and POST requests.

a. Briefly describe how you used Wireshark to examine the HTTP GET Request and Response for the `echo.php` page with your name in the data. Demonstrate with two corresponding screenshots in Wireshark. **(2.5 pts)**

b. Summarize using `curl` to create an HTTP POST request with your name in the data. Demonstrate the outcome with a screenshot from the `curl` program **(2.5 pts)**, and a screenshot of the corresponding HTTP Stream in Wireshark. **(2.5 pts)**

c. Compare the similarity/difference between HTTP POST Request and HTTP GET Request and between the two HTTP Responses above. **(2.5 pts)**    

## Submission

Use the `pandoc` tool to generate the PDF report for submission from the `README.md` file, make sure that the report and contents are rendered properly.

The PDF file should be named `your-username-waph-lab1.pdf`, e.g., `phungph-waph-lab1.pdf` 

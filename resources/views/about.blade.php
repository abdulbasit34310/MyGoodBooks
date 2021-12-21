@extends ('layouts.footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css">



    <link rel="stylesheet" href="/css/about.css">
    <title>About</title>

</head>
<body >
    <div class="container">
        <nav id="nav" class="navbar navbar-expand-md ">
            <a class="navbar-brand" href="/"><img src="images/Logo-01.png" ></a>
            <button class="navbar-toggler " data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div id="navbar" class="navbar-collapse collapse text-center" >
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item"><a class="nav-link"  href="/books">Home</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/goodbookslist">My Good Books List</a></li>

                    <li class="nav-item">
                        <div class="dropdown">
                        <button class="btn btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                          <p class="dropdown-item">Signed in as:<br> <span id="username">{{session('username')}}</span> </p>
                          <hr>
                          <a class="dropdown-item" href="/profile">Profile</a>
                          <a class="dropdown-item" href="/profile">Change Password</a>
                          <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                      </div></li>
                    
                    
                </ul>
            </div>
        </nav>
          <br>
          
<br>

        <div class="row text-center">
            <div class="col-6 col-md-3 col-lg-3 ">
                <div class="thumbnail">
                    <img class="img" src="images/shehroz.jpeg" alt="" srcset="" >
                    <div class="caption">
                        <h6>Shehroz Ahmad</h6>
                        <h6>SP19-BCS-032</h6>
                    </div>
                </div>
               
            </div>
            <div class="col-6 col-md-3 col-lg-3 order-lg-3 ">
                <div class="thumbnail float-right">
                    <img class="img" src="images/basit.jpeg" alt="" srcset="" >
                    <div class="caption">
                        <h6>Abdul Basit</h6>
                        <h6>SP19-BCS-109</h6>
                    </div>
                </div>
              
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-lg-2 text-center">
                <h2>About Us</h2>
                <hr>
                <p>My Good Books is our web engineering project which we made using HTML, CSS, Bootstrap, JavaScript, jQuery, PHP and Laravel Framework. We used mySQL as database to store book data, user and comments. </p>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div id="pripolicy">
            
            
            <a name="privacypolicy"></a>
            <h3 id="privacy">Privacy Policy for My Good Books</h3>

            <p>At My Good Books, accessible from https://www.mygoodbooks/privacypolicy/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by My Good Books and how we use it.</p>

            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in My Good Books. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicygenerator.info/">Privacy Policy Generator</a>.</p>

            <h4>Consent</h4>

            <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

            <h4>Information we collect</h4>

            <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
            <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
            <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

            <h4>How we use your information</h4>

            <p>We use the information we collect in various ways, including to:</p>

            <ul>
            <li>Provide, operate, and maintain our website</li>
            <li>Improve, personalize, and expand our website</li>
            <li>Understand and analyze how you use our website</li>
            <li>Develop new products, services, features, and functionality</li>
            <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
            <li>Send you emails</li>
            <li>Find and prevent fraud</li>
            </ul>

            <h4>Log Files</h4>

            <p>My Good Books follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

            <h4>Cookies and Web Beacons</h4>

            <p>Like any other website, My Good Books uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>

            <p>For more general information on cookies, please read <a href="https://www.privacypolicyonline.com/what-are-cookies/">"What Are Cookies"</a>.</p>

            <h4>Google DoubleClick DART Cookie</h4>

            <p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – <a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>


            <h4>Advertising Partners Privacy Policies</h4>

            <P>You may consult this list to find the Privacy Policy for each of the advertising partners of My Good Books.</p>

            <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on My Good Books, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

            <p>Note that My Good Books has no access to or control over these cookies that are used by third-party advertisers.</p>

            <h4>Third Party Privacy Policies</h4>

            <p>My Good Books's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

            <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

            <h4>CCPA Privacy Rights (Do Not Sell My Personal Information)</h4>

            <p>Under the CCPA, among other rights, California consumers have the right to:</p>
            <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
            <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
            <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

            <h4>GDPR Data Protection Rights</h4>

            <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
            <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
            <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
            <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
            <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
            <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
            <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

            <h4>Children's Information</h4>

            <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

            <p>My Good Books does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
            
            
            
        </div>
        <br>
        <hr>
        <br>
        <a name="terms"></a>
        <div>
            

            <h3 id="terms">Website Terms and Conditions of Use</h3>

            <h4>1. Terms</h4>
            
            <p>By accessing this Website, accessible from https://www.mygoodbooks/, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>
            
            <h4>2. Use License</h4>
            
            <p>Permission is granted to temporarily download one copy of the materials on My Good Books's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
            
            <ul>
                <li>modify or copy the materials;</li>
                <li>use the materials for any commercial purpose or for any public display;</li>
                <li>attempt to reverse engineer any software contained on My Good Books's Website;</li>
                <li>remove any copyright or other proprietary notations from the materials; or</li>
                <li>transferring the materials to another person or "mirror" the materials on any other server.</li>
            </ul>
            
            <p>This will let My Good Books to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format. These Terms of Service has been created with the help of the <a href="https://www.termsofservicegenerator.net">Terms Of Service Generator</a>.</p>
            
            <h4>3. Disclaimer</h4>
            
            <p>All the materials on My Good Books’s Website are provided "as is". My Good Books makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, My Good Books does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>
            
            <h4>4. Limitations</h4>
            
            <p>My Good Books or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on My Good Books’s Website, even if My Good Books or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>
            
            <h4>5. Revisions and Errata</h4>
            
            <p>The materials appearing on My Good Books’s Website may include technical, typographical, or photographic errors. My Good Books will not promise that any of the materials in this Website are accurate, complete, or current. My Good Books may change the materials contained on its Website at any time without notice. My Good Books does not make any commitment to update the materials.</p>
            
            <h4>6. Links</h4>
            
            <p>My Good Books has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by My Good Books of the site. The use of any linked website is at the user’s own risk.</p>
            
            <h4>7. Site Terms of Use Modifications</h4>
            
            <p>My Good Books may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>
            
            <h4>8. Your Privacy</h4>
            
            <p>Please read our Privacy Policy.</p>
            
            <h4>9. Governing Law</h4>
            
            <p>Any claim related to My Good Books's Website shall be governed by the laws of pk without regards to its conflict of law provisions.</p>


        </div>


    </div>
    <br>
    <br>

    @section('footercontent')



</body>
</html>
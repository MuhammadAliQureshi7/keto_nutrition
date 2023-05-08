<?php foreach($blog as $blog):?>
<div class="banner banner-2">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2><?php echo $blog->title;?></h2>
                    <p><?php echo $blog->summary;?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="policy">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <p>As a dietician, we may collect personal information from our clients through our website.</p>
                <ol>
                    <li><strong>Information we collect:</strong> We collect personal information such as name, email address, and phone number when you fill out our contact form or schedule an appointment. We may also collect health-related information such as medical history, dietary habits, and lifestyle choices to better understand your needs.</li>
                    <li><strong>How we use your information:</strong> We use the information you provide to respond to your inquiries, schedule appointments, and provide personalized nutrition counseling services. We may also use your information to send you promotional materials, newsletters, and other marketing communications, but only if you have given us your consent to do so.</li>
                    <li><strong>How we protect your information: </strong>We take the security and protection of your personal information seriously. We use industry-standard encryption technologies and implement appropriate administrative, physical, and technical measures to safeguard your information against unauthorized access, disclosure, or alteration.</li>
                    <li><strong>How we share your information: </strong>We do not sell, rent, or share your personal information with third parties for marketing purposes. However, we may share your information with our trusted partners and service providers who help us deliver our services and improve our website.</li>
                    <li><strong>Your rights:</strong> You have the right to access, modify, or delete your personal information at any time. You also have the right to object to the processing of your personal information, restrict its use, or withdraw your consent. Please contact us if you have any questions or concerns about your privacy rights.</li>
                    <li><strong>Changes to this policy:</strong> We may update this privacy policy from time to time to reflect changes in our business practices, legal requirements, or industry standards. We will notify you of any material changes and obtain your consent before using your information in a new way.</li>
                </ol>
                <p>By using our website and services, you acknowledge that you have read and understood this privacy policy and agree to our collection, use, and disclosure of your personal information as described herein.</p>
            </div>
            
            
        </div>
    </div>
</div>
<?php endforeach;?>
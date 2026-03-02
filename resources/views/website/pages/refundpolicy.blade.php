@extends('website.layout.websitemain')
@section('title', 'Privacy Policy | ' . config('app.name'))
@section('content')

    <section class="py-3 py-md-3" style="background-color: #e4f0ff;">
        <div class="container py-3 py-md-4">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="globaltxtcolor mb-4">
                        Refund & Cancellation Policy
                    </div>
                    <div class="text-dark">
                        <p><strong>Effective Date:</strong> {{ \Carbon\Carbon::now()->format('F d, Y') }}</p>

                        <p>At <strong>YUVNEXUS DIGITAL PVT LTD</strong>, we are committed to delivering high-quality
                            services tailored to meet your unique needs. Our goal is to ensure customer satisfaction and
                            build long-term relationships. We understand that there might be times when you need to request
                            a refund or cancel a service. This policy outlines the terms and conditions for refunds and
                            cancellations, aiming to provide clarity and transparency.</p>

                        <h2>1. Refund Eligibility</h2>
                        <p>We want to ensure that our clients are satisfied with our services. You may be eligible for a
                            refund for standard services if:</p>
                        <ul>
                            <li>You submit a refund request within <strong>7 days</strong> from the order date.</li>
                            <li>The service usage is verified to be below <strong>10%</strong>.</li>
                        </ul>
                        <p><strong>Both conditions must be met</strong> to qualify for a refund.</p>

                        <h2>2. Non-Refundable Services</h2>
                        <p>Certain services are non-refundable due to their customized nature and the resources involved.
                            These include:</p>

                        <h3>Custom Orders:</h3>
                        <ul>
                            <li>Web Development</li>
                            <li>App Development</li>
                            <li>CRM Solutions</li>
                            <li>ERP Solutions</li>
                        </ul>

                        <h3>Design and Video Production Services:</h3>
                        <ul>
                            <li>Logo Design</li>
                            <li>Graphic Design</li>
                            <li>Label Design</li>
                            <li>Product Design</li>
                            <li>Video Editing</li>
                            <li>UI Design</li>
                            <li>Product Shoot Services</li>
                        </ul>

                        <h3>PPC Services (Google Ads, Meta Ads, etc.):</h3>
                        <p>If services are stopped due to third-party rejections involving documents, client service/product
                            categories, or policy violations, service charges will remain non-refundable.</p>

                        <h3>Marketplace Services (Amazon, Flipkart, Myntra, Meesho, etc.):</h3>
                        <p>If account management services are stopped due to third-party rejections involving documents,
                            service/product categories, or any violations, no refunds will be issued for our service
                            charges.</p>

                        <h3>Subscription-Based Services:</h3>
                        <ul>
                            <li>Email Marketing</li>
                            <li>WhatsApp Marketing</li>
                            <li>Other subscription services provided by YUVNEXUS DIGITAL</li>
                        </ul>

                        <h2>3. Cancellation Terms</h2>
                        <p>We understand that circumstances can change. You can cancel eligible services within <strong>7
                                days</strong> of the order date. Refunds for cancellations will only be processed if the
                            conditions in Section 1 are met.</p>

                        <h2>4. Refund Process</h2>
                        <p>We aim to make the refund process as smooth as possible:</p>
                        <ul>
                            <li><strong>Submission:</strong> Submit your refund request to <a
                                    href="mailto:admin@yuvmedia.com">admin@yuvmedia.com</a>, including your order number and
                                the reason for the request.</li>
                            <li><strong>Evaluation:</strong> We will review your request to ensure it meets the refund
                                eligibility criteria.</li>
                            <li><strong>Processing:</strong> Approved refunds will be processed within <strong>15 working
                                    days</strong> from the date of approval.</li>
                        </ul>

                        <div class="contact">
                            <h2>5. Contact Information</h2>
                            <p>We are here to help. For any refund and cancellation inquiries, please contact us:</p>
                            <ul>
                                <li><strong>Email:</strong> <a href="mailto:admin@yuvmedia.com">admin@yuvmedia.com</a></li>
                                <li><strong>Phone:</strong> +91-8078671648</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection

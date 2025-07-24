<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Branding Sandbox - Preview</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Axios (optional, not used here) -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- TinyColor for color contrast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.4.2/tinycolor.min.js"></script>

</head>

<body class="min-h-screen flex flex-col md:flex-row bg-gray-100">

<form id="brandingForm" class="w-full md:w-1/3 order-2 md:order-none bg-white p-8 flex flex-col gap-6 shadow-lg" enctype="multipart/form-data">
    <h2 class="text-3xl font-extrabold mb-6">Branding Sandbox</h2>

    <!-- GLOBAL SETTINGS -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md" open>
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            Global Branding Settings
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="mt-4 space-y-4">
            <label class="block">
                <span class="font-semibold">Upload Logo</span>
                <input type="file" name="logo" id="logo" accept="image/*" class="block w-full mt-2 p-2 border rounded" />
            </label>
            <label class="block">
                <span class="font-semibold">Brand Name</span>
                <input type="text" name="brand_name" id="brand_name" class="block w-full mt-2 p-2 border rounded" placeholder="Your Brand Name" />
            </label>
            <label class="block">
                <span class="font-semibold">Primary Color</span>
                <input type="color" name="primary_color" id="primary_color" value="#2e3a59" class="block w-full h-10 mt-2 rounded" />
            </label>
            <label class="block">
                <span class="font-semibold">Secondary Color</span>
                <input type="color" name="secondary_color" id="secondary_color" value="#e0e0e0" class="block w-full h-10 mt-2 rounded" />
            </label>
            <label class="block">
                <span class="font-semibold">Font</span>
                <select name="font" id="font" class="block w-full mt-2 p-2 border rounded">
                    <option value="Arial, sans-serif">Arial</option>
                    <option value="'Helvetica Neue', Helvetica, sans-serif">Helvetica Neue</option>
                    <option value="Georgia, serif">Georgia</option>
                    <option value="Verdana, sans-serif">Verdana</option>
                    <option value="'Courier New', Courier, monospace">Courier New</option>
                    <option value="'Times New Roman', Times, serif">Times New Roman</option>
                    <option value="'Trebuchet MS', Helvetica, sans-serif">Trebuchet MS</option>
                    <option value="'Lucida Console', Monaco, monospace">Lucida Console</option>
                    <option value="'Palatino Linotype', Palatino, serif">Palatino Linotype</option>
                    <option value="'Comic Sans MS', cursive, sans-serif">Comic Sans MS</option>
                    <option value="'Impact', Charcoal, sans-serif">Impact</option>
                </select>

            </label>
        </div>
    </details>

    <!-- HEADER -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md">
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            Header
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="mt-4 space-y-4">
            <label class="block">
                <span class="font-semibold">Navigation Items (comma separated)</span>
                <input type="text" name="nav_items" id="nav_items" class="block w-full mt-2 p-2 border rounded" placeholder="Home, About, Services, Contact" />
            </label>
            <label class="block">
                <span class="font-semibold">Upload Header Banner Image</span>
                <input type="file" name="header_banner_file" id="header_banner_file" accept="image/*" class="block w-full mt-2 p-2 border rounded" />
            </label>
        </div>
    </details>

    <!-- HERO -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md">
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            Hero
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="mt-4 space-y-4">
            <label class="block">
                <span class="font-semibold">Hero Title</span>
                <input type="text" name="hero_title" id="hero_title" class="block w-full mt-2 p-2 border rounded" placeholder="Welcome to Your Brand" />
            </label>
            <label class="block">
                <span class="font-semibold">Hero Slogan</span>
                <textarea name="hero_slogan" id="hero_slogan" rows="3" class="block w-full mt-2 p-2 border rounded" placeholder="A short slogan or description about your company."></textarea>
            </label>
            <label class="block">
                <span class="font-semibold">Button Text</span>
                <input type="text" name="hero_button" id="hero_button" class="block w-full mt-2 p-2 border rounded" placeholder="Check Our Services" />
            </label>
        </div>
    </details>

    <!-- SERVICES -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md">
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            Services
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="mt-4 space-y-4">
            <!-- Service 1 -->
            <label class="block">
                <span class="font-semibold">Service 1 Title</span>
                <input type="text" name="service1_title" id="service1_title" class="block w-full mt-2 p-2 border rounded" placeholder="Design" />
            </label>
            <label class="block">
                <span class="font-semibold">Service 1 Description</span>
                <textarea name="service1_desc" id="service1_desc" rows="2" class="block w-full mt-2 p-2 border rounded" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit."></textarea>
            </label>

            <!-- Service 2 -->
            <label class="block">
                <span class="font-semibold">Service 2 Title</span>
                <input type="text" name="service2_title" id="service2_title" class="block w-full mt-2 p-2 border rounded" placeholder="Development" />
            </label>
            <label class="block">
                <span class="font-semibold">Service 2 Description</span>
                <textarea name="service2_desc" id="service2_desc" rows="2" class="block w-full mt-2 p-2 border rounded" placeholder="Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."></textarea>
            </label>

            <!-- Service 3 -->
            <label class="block">
                <span class="font-semibold">Service 3 Title</span>
                <input type="text" name="service3_title" id="service3_title" class="block w-full mt-2 p-2 border rounded" placeholder="Consulting" />
            </label>
            <label class="block">
                <span class="font-semibold">Service 3 Description</span>
                <textarea name="service3_desc" id="service3_desc" rows="2" class="block w-full mt-2 p-2 border rounded" placeholder="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."></textarea>
            </label>
        </div>
    </details>

    <!-- GALLERY -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md">
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            Gallery Images
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="mt-4 space-y-4">
            <label class="block">
                <span class="font-semibold">Image 1 URL</span>
                <input type="text" name="gallery_img1" id="gallery_img1" class="block w-full mt-2 p-2 border rounded" placeholder="https://picsum.photos/400/250?random=1" />
            </label>
            <label class="block">
                <span class="font-semibold">Image 2 URL</span>
                <input type="text" name="gallery_img2" id="gallery_img2" class="block w-full mt-2 p-2 border rounded" placeholder="https://picsum.photos/400/250?random=2" />
            </label>
            <label class="block">
                <span class="font-semibold">Image 3 URL</span>
                <input type="text" name="gallery_img3" id="gallery_img3" class="block w-full mt-2 p-2 border rounded" placeholder="https://picsum.photos/400/250?random=3" />
            </label>
        </div>
    </details>

    <!-- ABOUT -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md">
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            About Section
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="mt-4 space-y-4">
            <label class="block">
                <span class="font-semibold">About Title</span>
                <input type="text" name="about_title" id="about_title" class="block w-full mt-2 p-2 border rounded" placeholder="Your Brand" />
            </label>
            <label class="block">
                <span class="font-semibold">About Text</span>
                <textarea name="about_text" id="about_text" class="block w-full mt-2 p-2 border rounded" rows="4" placeholder="Describe your company..."></textarea>
            </label>
        </div>
    </details>

    <!-- TEAM -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md">
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            Team Section
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="mt-4 space-y-4">
            <!-- Team member 1 -->
            <label class="block">
                <span class="font-semibold">Team Member 1 Name</span>
                <input type="text" name="team1_name" id="team1_name" class="block w-full mt-2 p-2 border rounded" placeholder="Jane Doe" />
            </label>
            <label class="block">
                <span class="font-semibold">Team Member 1 Role</span>
                <input type="text" name="team1_role" id="team1_role" class="block w-full mt-2 p-2 border rounded" placeholder="Creative Director" />
            </label>
            <label class="block">
                <span class="font-semibold">Team Member 1 Image URL</span>
                <input type="text" name="team1_img" id="team1_img" class="block w-full mt-2 p-2 border rounded" placeholder="https://i.pravatar.cc/150?img=11" />
            </label>

            <!-- Team member 2 -->
            <label class="block mt-4">
                <span class="font-semibold">Team Member 2 Name</span>
                <input type="text" name="team2_name" id="team2_name" class="block w-full mt-2 p-2 border rounded" placeholder="John Smith" />
            </label>
            <label class="block">
                <span class="font-semibold">Team Member 2 Role</span>
                <input type="text" name="team2_role" id="team2_role" class="block w-full mt-2 p-2 border rounded" placeholder="Lead Developer" />
            </label>
            <label class="block">
                <span class="font-semibold">Team Member 2 Image URL</span>
                <input type="text" name="team2_img" id="team2_img" class="block w-full mt-2 p-2 border rounded" placeholder="https://i.pravatar.cc/150?img=22" />
            </label>
        </div>
    </details>

    <!-- FAQ -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md">
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            FAQ Section
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="mt-4 space-y-4">
            <!-- FAQ 1 -->
            <label class="block">
                <span class="font-semibold">FAQ 1 Question</span>
                <input type="text" name="faq1_q" id="faq1_q" class="block w-full mt-2 p-2 border rounded" placeholder="What services do you offer?" />
            </label>
            <label class="block">
                <span class="font-semibold">FAQ 1 Answer</span>
                <textarea name="faq1_a" id="faq1_a" class="block w-full mt-2 p-2 border rounded" rows="2" placeholder="We offer design, development, and consulting services tailored to your brand."></textarea>
            </label>

            <!-- FAQ 2 -->
            <label class="block mt-4">
                <span class="font-semibold">FAQ 2 Question</span>
                <input type="text" name="faq2_q" id="faq2_q" class="block w-full mt-2 p-2 border rounded" placeholder="How can I get a quote?" />
            </label>
            <label class="block">
                <span class="font-semibold">FAQ 2 Answer</span>
                <textarea name="faq2_a" id="faq2_a" class="block w-full mt-2 p-2 border rounded" rows="2" placeholder="Use our contact form or reach out via email to request a personalized quote."></textarea>
            </label>

            <!-- FAQ 3 -->
            <label class="block mt-4">
                <span class="font-semibold">FAQ 3 Question</span>
                <input type="text" name="faq3_q" id="faq3_q" class="block w-full mt-2 p-2 border rounded" placeholder="Where are you located?" />
            </label>
            <label class="block">
                <span class="font-semibold">FAQ 3 Answer</span>
                <textarea name="faq3_a" id="faq3_a" class="block w-full mt-2 p-2 border rounded" rows="2" placeholder="We are a remote-first company with team members across the globe."></textarea>
            </label>
        </div>
    </details>


    <!-- TESTIMONIALS -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md">
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            Testimonials Section
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="p-6 border rounded max-w-md mx-auto mt-8 space-y-4">
            <label>
                <span class="font-semibold">Heading Text</span>
                <input type="text" id="input-cta-heading" class="w-full mt-1 p-2 border rounded" value="Ready to elevate your brand?">
            </label>
            <label>
                <span class="font-semibold">Subtext</span>
                <input type="text" id="input-cta-subtext" class="w-full mt-1 p-2 border rounded" value="Contact us today and let's build something amazing together.">
            </label>
            <label>
                <span class="font-semibold">Button Text</span>
                <input type="text" id="input-cta-button-text" class="w-full mt-1 p-2 border rounded" value="Get in Touch">
            </label>
            <label>
                <span class="font-semibold">Button URL</span>
                <input type="text" id="input-cta-button-url" class="w-full mt-1 p-2 border rounded" value="#">
            </label>
            <label>
                <span class="font-semibold">Background Color</span>
                <input type="color" id="input-cta-bgcolor" class="w-full h-10 mt-1 rounded" value="#059669"> <!-- emerald-600 -->
            </label>
            <label>
                <span class="font-semibold">Button Background Color</span>
                <input type="color" id="input-cta-button-bgcolor" class="w-full h-10 mt-1 rounded" value="#ffffff">
            </label>
            <label>
                <span class="font-semibold">Button Text Color</span>
                <input type="color" id="input-cta-button-textcolor" class="w-full h-10 mt-1 rounded" value="#059669">
            </label>
        </div>

    </details>

    <!-- CTA -->
    <details class="group border border-gray-300 rounded-lg p-4 open:shadow-md">
        <summary class="cursor-pointer font-semibold text-lg text-gray-800 flex justify-between items-center">
            Call To Action
            <span class="transition-transform duration-300 group-open:rotate-180">⌄</span>
        </summary>
        <div class="mt-4 space-y-4">
            <label class="block">
                <span class="font-semibold">CTA Headline</span>
                <input type="text" name="cta_headline" id="cta_headline" class="block w-full mt-2 p-2 border rounded" />
            </label>
            <label class="block">
                <span class="font-semibold">CTA Subtext</span>
                <input type="text" name="cta_subtext" id="cta_subtext" class="block w-full mt-2 p-2 border rounded" />
            </label>
            <label class="block">
                <span class="font-semibold">CTA Button Label</span>
                <input type="text" name="cta_button_label" id="cta_button" class="block w-full mt-2 p-2 border rounded" />
            </label>
        </div>
    </details>

    <!-- Submit -->
    <div class="sticky bottom-0 bg-white pt-4 mt-6 mb-6 z-10">
        <button type="submit" class="w-full bg-blue-700 text-white rounded-lg py-4 font-semibold text-lg shadow-md hover:bg-blue-800 transition-colors duration-300 ease-in-out">
            Generate Preview
        </button>

        <button onclick="downloadPreview()"  class="mt-2 w-full bg-blue-700 text-white rounded-lg py-4 font-semibold text-lg shadow-md hover:bg-blue-800 transition-colors duration-300 ease-in-out">
            Save Preview as Image
        </button>
    </div>
</form>

<!-- Preview -->
<div id="preview-content" class="hidden">

    <!-- Header -->
    <header id="preview-header" class="flex items-center justify-between p-6 bg-indigo-700 text-white">
        <div class="flex items-center gap-4">
            <img id="preview-logo" src="" alt="Logo" class="h-12 rounded shadow-md hidden" />
            <h1 id="preview-brand-name" class="text-3xl font-bold select-none">Your Brand</h1>
        </div>
        <nav>
            <ul class="flex gap-6 font-semibold">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">Services</a></li>
                <li><a href="#" class="hover:underline">Projects</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Header Banner Image -->
    <div id="preview-header-banner" class="w-full">
        <img src="https://picsum.photos/1600/400?grayscale&blur=1" alt="Header Banner"
             class="w-full h-64 object-cover" />
    </div>

    <!-- Hero -->
    <section id="preview-hero" class="bg-white flex flex-col items-center justify-center p-12 text-center text-gray-800">
        <h2 class="text-4xl font-bold mb-4">Welcome to <span id="hero-brand-name">Your Brand</span></h2>
        <p class="max-w-xl mb-6 text-lg">A short slogan or description about your company.</p>
        <button class="px-6 py-3 bg-indigo-600 text-white rounded font-semibold shadow hover:bg-indigo-700 transition">Check Our Services</button>
    </section>

    <!-- Services -->
    <section class="p-12 bg-gray-50 text-center text-gray-800">
        <h2 class="text-3xl font-bold mb-8">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded shadow">
                <h3 id="service1_title_preview" class="text-xl font-semibold mb-2">Design</h3>
                <p id="service1_desc_preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <h3 id="service2_title_preview" class="text-xl font-semibold mb-2">Development</h3>
                <p id="service2_desc_preview">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <h3 id="service3_title_preview" class="text-xl font-semibold mb-2">Consulting</h3>
                <p id="service3_desc_preview">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            </div>
        </div>
    </section>


    <!-- Gallery -->
    <section id="preview-gallery" class="p-12 bg-white text-center text-gray-800">
        <h2 class="text-3xl font-bold mb-8">Project Gallery</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <img id="gallery_img1_preview" src="https://picsum.photos/400/250?random=1" class="rounded shadow" />
            <img id="gallery_img2_preview" src="https://picsum.photos/400/250?random=2" class="rounded shadow" />
            <img id="gallery_img3_preview" src="https://picsum.photos/400/250?random=3" class="rounded shadow" />
        </div>
    </section>

    <!-- About -->
    <section id="preview-about" class="p-12 bg-gray-100 text-center text-gray-800">
        <h2 class="text-3xl font-bold mb-4">About <span id="about-brand-name">Your Brand</span></h2>
        <p class="max-w-2xl mx-auto text-lg mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut pulvinar purus, nec euismod orci.
            Praesent laoreet justo nec lacus interdum, sed accumsan lorem hendrerit.
        </p>
    </section>

    <!-- Team -->
    <section class="p-12 bg-white text-center text-gray-800">
        <h2 class="text-3xl font-bold mb-8">Meet Our Team</h2>
        <div class="flex flex-wrap justify-center gap-8">
            <div class="w-64 text-center">
                <img src="https://i.pravatar.cc/150?img=11" class="rounded-full w-32 h-32 mx-auto mb-4" />
                <h4 class="font-semibold text-lg">Jane Doe</h4>
                <p class="text-sm text-gray-500">Creative Director</p>
            </div>
            <div class="w-64 text-center">
                <img src="https://i.pravatar.cc/150?img=22" class="rounded-full w-32 h-32 mx-auto mb-4" />
                <h4 class="font-semibold text-lg">John Smith</h4>
                <p class="text-sm text-gray-500">Lead Developer</p>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="p-12 bg-gray-50 text-gray-800">
        <h2 class="text-3xl font-bold mb-6 text-center">Frequently Asked Questions</h2>
        <div class="max-w-2xl mx-auto">
            <details class="mb-4 bg-white p-4 rounded shadow">
                <summary class="font-semibold cursor-pointer">What services do you offer?</summary>
                <p class="mt-2 text-gray-700">We offer design, development, and consulting services tailored to your brand.</p>
            </details>
            <details class="mb-4 bg-white p-4 rounded shadow">
                <summary class="font-semibold cursor-pointer">How can I get a quote?</summary>
                <p class="mt-2 text-gray-700">Use our contact form or reach out via email to request a personalized quote.</p>
            </details>
            <details class="bg-white p-4 rounded shadow">
                <summary class="font-semibold cursor-pointer">Where are you located?</summary>
                <p class="mt-2 text-gray-700">We are a remote-first company with team members across the globe.</p>
            </details>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="preview-testimonials" class="p-12 bg-white text-center text-gray-800">
        <h2 class="text-3xl font-bold mb-8">Client Testimonials</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <blockquote class="max-w-md bg-gray-50 p-6 rounded shadow">
                <p>"Exceptional work and great attention to detail!"</p>
                <footer class="mt-4 font-semibold">— Client X</footer>
            </blockquote>
            <blockquote class="max-w-md bg-gray-50 p-6 rounded shadow">
                <p>"Fast delivery and fantastic communication."</p>
                <footer class="mt-4 font-semibold">— Client Y</footer>
            </blockquote>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="preview-cta" class="p-12 bg-emerald-600 text-white text-center">
        <h2 id="cta-heading" class="text-3xl font-bold mb-4">Ready to elevate your brand?</h2>
        <p id="cta-subtext" class="mb-6 text-lg">Contact us today and let's build something amazing together.</p>
        <a id="cta-button" href="#" class="bg-white text-emerald-600 font-bold px-6 py-3 rounded shadow hover:bg-gray-100 transition">Get in Touch</a>
    </section>

    <!-- Footer -->
    <footer id="preview-footer" class="p-6 text-center bg-indigo-800 text-white">
        &copy; <span id="footer-year">2025</span> <span id="footer-brand-name">Your Brand</span> - All rights reserved.
    </footer>

</div>


<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
<script>
    function downloadPreview() {
        const previewElement = document.getElementById('preview-content');

        html2canvas(previewElement, {
            useCORS: true,
            scrollY: -window.scrollY,
            scale: 2
        }).then(canvas => {
            const link = document.createElement('a');
            link.download = 'preview.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
        });
    }
</script>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form'); // zorg dat je form een <form> is
        const preview = document.getElementById('preview-content');
        const logoInput = document.getElementById('logo');
        const brandNameInput = document.getElementById('brand_name');
        const primaryColorInput = document.getElementById('primary_color');
        const secondaryColorInput = document.getElementById('secondary_color');
        const fontSelect = document.getElementById('font');

        const previewLogo = document.getElementById('preview-logo');
        const previewBrandName = document.getElementById('preview-brand-name');
        const heroBrandName = document.getElementById('hero-brand-name');
        const aboutBrandName = document.getElementById('about-brand-name');
        const footerBrandName = document.getElementById('footer-brand-name');
        const previewHeader = document.getElementById('preview-header');
        const previewFooter = document.getElementById('preview-footer');
        const previewHero = document.getElementById('preview-hero');
        const previewServices = document.querySelector('section.p-12.bg-gray-50');
        const previewCallToAction = document.querySelector('section.p-12.bg-emerald-600');

        // Default values
        const defaults = {
            brandName: 'Your Brand',
            primaryColor: '#2e3a59',
            secondaryColor: '#e0e0e0',
            font: 'Arial, sans-serif',
        };

        function updateBrandName(name) {
            const displayName = name?.trim() || defaults.brandName;
            previewBrandName.textContent = displayName;
            heroBrandName.textContent = displayName;
            aboutBrandName.textContent = displayName;
            footerBrandName.textContent = displayName;
        }

        function updateColors(primary, secondary) {
            previewHeader.style.backgroundColor = primary || defaults.primaryColor;
            previewFooter.style.backgroundColor = primary || defaults.primaryColor;
            previewHero.style.color = primary || defaults.primaryColor;
            if (previewServices) previewServices.style.backgroundColor = secondary || defaults.secondaryColor;
            if (previewCallToAction) previewCallToAction.style.backgroundColor = primary || defaults.primaryColor;
        }

        function updateFont(font) {
            preview.style.fontFamily = font || defaults.font;
        }

        function updateLogo(file) {
            if (!file) {
                previewLogo.src = '';
                previewLogo.classList.add('hidden');
                return;
            }
            const reader = new FileReader();
            reader.onload = () => {
                previewLogo.src = reader.result;
                previewLogo.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }

        const navInput = document.getElementById('nav_items');
        const navList = document.querySelector('#preview-header nav ul');
        const headerBannerFileInput = document.getElementById('header_banner_file');
        const headerBannerImg = document.querySelector('#preview-header-banner img');

        function updateNavItems() {
            const items = navInput.value
                .split(',')
                .map(item => item.trim())
                .filter(item => item.length > 0);

            navList.innerHTML = '';

            if (items.length === 0) {
                ['Home', 'Services', 'Projects', 'Contact'].forEach(text => {
                    const li = document.createElement('li');
                    li.innerHTML = `<a href="#" class="hover:underline">${text}</a>`;
                    navList.appendChild(li);
                });
            } else {
                items.forEach(text => {
                    const li = document.createElement('li');
                    li.innerHTML = `<a href="#" class="hover:underline">${text}</a>`;
                    navList.appendChild(li);
                });
            }
        }

        navInput.addEventListener('input', updateNavItems);

        headerBannerFileInput.addEventListener('change', () => {
            const file = headerBannerFileInput.files[0];
            if (!file) {
                headerBannerImg.src = 'https://picsum.photos/1600/400?grayscale&blur=1';
                return;
            }
            const reader = new FileReader();
            reader.onload = (e) => {
                headerBannerImg.src = e.target.result;
            };
            reader.readAsDataURL(file);
        });

        // Init defaults
        updateNavItems();
        headerBannerImg.src = 'https://picsum.photos/1600/400?grayscale&blur=1';

        // HERO
        const heroTitleInput = document.getElementById('hero_title');
        const heroSloganInput = document.getElementById('hero_slogan');
        const heroButtonInput = document.getElementById('hero_button');

        const heroTitleDisplay = document.querySelector('#preview-hero h2');
        const heroSloganDisplay = document.querySelector('#preview-hero p');
        const heroButtonDisplay = document.querySelector('#preview-hero button');

        function updateHero() {
            heroTitleDisplay.innerHTML = heroTitleInput.value.trim() || 'Welcome to <span id="hero-brand-name">Your Brand</span>';
            heroSloganDisplay.textContent = heroSloganInput.value.trim() || 'A short slogan or description about your company.';
            heroButtonDisplay.textContent = heroButtonInput.value.trim() || 'Check Our Services';
        }

        heroTitleInput.addEventListener('input', updateHero);
        heroSloganInput.addEventListener('input', updateHero);
        heroButtonInput.addEventListener('input', updateHero);

// Init defaults
        updateHero();

        // SERVICES
        const service1TitleInput = document.getElementById('service1_title');
        const service1DescInput = document.getElementById('service1_desc');
        const service2TitleInput = document.getElementById('service2_title');
        const service2DescInput = document.getElementById('service2_desc');
        const service3TitleInput = document.getElementById('service3_title');
        const service3DescInput = document.getElementById('service3_desc');

        const service1TitlePreview = document.getElementById('service1_title_preview');
        const service1DescPreview = document.getElementById('service1_desc_preview');
        const service2TitlePreview = document.getElementById('service2_title_preview');
        const service2DescPreview = document.getElementById('service2_desc_preview');
        const service3TitlePreview = document.getElementById('service3_title_preview');
        const service3DescPreview = document.getElementById('service3_desc_preview');

        function updateServices() {
            service1TitlePreview.textContent = service1TitleInput.value.trim() || 'Design';
            service1DescPreview.textContent = service1DescInput.value.trim() || 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
            service2TitlePreview.textContent = service2TitleInput.value.trim() || 'Development';
            service2DescPreview.textContent = service2DescInput.value.trim() || 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
            service3TitlePreview.textContent = service3TitleInput.value.trim() || 'Consulting';
            service3DescPreview.textContent = service3DescInput.value.trim() || 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.';
        }

        service1TitleInput.addEventListener('input', updateServices);
        service1DescInput.addEventListener('input', updateServices);
        service2TitleInput.addEventListener('input', updateServices);
        service2DescInput.addEventListener('input', updateServices);
        service3TitleInput.addEventListener('input', updateServices);
        service3DescInput.addEventListener('input', updateServices);

        // Init defaults
        updateServices();

        // GALLERY
        const galleryImg1Input = document.getElementById('gallery_img1');
        const galleryImg2Input = document.getElementById('gallery_img2');
        const galleryImg3Input = document.getElementById('gallery_img3');

        const galleryImg1Preview = document.getElementById('gallery_img1_preview');
        const galleryImg2Preview = document.getElementById('gallery_img2_preview');
        const galleryImg3Preview = document.getElementById('gallery_img3_preview');

        function updateGallery() {
            galleryImg1Preview.src = galleryImg1Input.value.trim() || "https://picsum.photos/400/250?random=1";
            galleryImg2Preview.src = galleryImg2Input.value.trim() || "https://picsum.photos/400/250?random=2";
            galleryImg3Preview.src = galleryImg3Input.value.trim() || "https://picsum.photos/400/250?random=3";
        }

        galleryImg1Input.addEventListener('input', updateGallery);
        galleryImg2Input.addEventListener('input', updateGallery);
        galleryImg3Input.addEventListener('input', updateGallery);

// Init default images
        updateGallery();

        // ABOUT
        const aboutTitleInput = document.getElementById('about_title');
        const aboutTextInput = document.getElementById('about_text');
        const aboutTextPreview = document.getElementById('about-text');

        aboutTitleInput.addEventListener('input', () => {
            aboutBrandName.textContent = aboutTitleInput.value.trim() || "Your Brand";
        });

        aboutTextInput.addEventListener('input', () => {
            aboutTextPreview.textContent = aboutTextInput.value.trim() || "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut pulvinar purus, nec euismod orci. Praesent laoreet justo nec lacus interdum, sed accumsan lorem hendrerit.";
        });

        // TEAMS
        const team1NameInput = document.getElementById('team1_name');
        const team1RoleInput = document.getElementById('team1_role');
        const team1ImgInput = document.getElementById('team1_img');

        const team2NameInput = document.getElementById('team2_name');
        const team2RoleInput = document.getElementById('team2_role');
        const team2ImgInput = document.getElementById('team2_img');

        const team1NamePreview = document.getElementById('team1_name_preview');
        const team1RolePreview = document.getElementById('team1_role_preview');
        const team1ImgPreview = document.getElementById('team1_img_preview');

        const team2NamePreview = document.getElementById('team2_name_preview');
        const team2RolePreview = document.getElementById('team2_role_preview');
        const team2ImgPreview = document.getElementById('team2_img_preview');

        team1NameInput.addEventListener('input', () => {
            team1NamePreview.textContent = team1NameInput.value.trim() || "Jane Doe";
        });

        team1RoleInput.addEventListener('input', () => {
            team1RolePreview.textContent = team1RoleInput.value.trim() || "Creative Director";
        });

        team1ImgInput.addEventListener('input', () => {
            const url = team1ImgInput.value.trim();
            if(url) {
                team1ImgPreview.src = url;
                team1ImgPreview.classList.remove('hidden');
            } else {
                team1ImgPreview.src = "https://i.pravatar.cc/150?img=11";
            }
        });

        team2NameInput.addEventListener('input', () => {
            team2NamePreview.textContent = team2NameInput.value.trim() || "John Smith";
        });

        team2RoleInput.addEventListener('input', () => {
            team2RolePreview.textContent = team2RoleInput.value.trim() || "Lead Developer";
        });

        team2ImgInput.addEventListener('input', () => {
            const url = team2ImgInput.value.trim();
            if(url) {
                team2ImgPreview.src = url;
                team2ImgPreview.classList.remove('hidden');
            } else {
                team2ImgPreview.src = "https://i.pravatar.cc/150?img=22";
            }
        });

        // FAQ
        const faq1QInput = document.getElementById('faq1_q');
        const faq1AInput = document.getElementById('faq1_a');
        const faq2QInput = document.getElementById('faq2_q');
        const faq2AInput = document.getElementById('faq2_a');
        const faq3QInput = document.getElementById('faq3_q');
        const faq3AInput = document.getElementById('faq3_a');

        const faq1QPreview = document.getElementById('faq1_q_preview');
        const faq1APreview = document.getElementById('faq1_a_preview');
        const faq2QPreview = document.getElementById('faq2_q_preview');
        const faq2APreview = document.getElementById('faq2_a_preview');
        const faq3QPreview = document.getElementById('faq3_q_preview');
        const faq3APreview = document.getElementById('faq3_a_preview');

        faq1QInput.addEventListener('input', () => {
            faq1QPreview.textContent = faq1QInput.value.trim() || "What services do you offer?";
        });
        faq1AInput.addEventListener('input', () => {
            faq1APreview.textContent = faq1AInput.value.trim() || "We offer design, development, and consulting services tailored to your brand.";
        });

        faq2QInput.addEventListener('input', () => {
            faq2QPreview.textContent = faq2QInput.value.trim() || "How can I get a quote?";
        });
        faq2AInput.addEventListener('input', () => {
            faq2APreview.textContent = faq2AInput.value.trim() || "Use our contact form or reach out via email to request a personalized quote.";
        });

        faq3QInput.addEventListener('input', () => {
            faq3QPreview.textContent = faq3QInput.value.trim() || "Where are you located?";
        });
        faq3AInput.addEventListener('input', () => {
            faq3APreview.textContent = faq3AInput.value.trim() || "We are a remote-first company with team members across the globe.";
        });

        // TESTIMONIALS


        // CTA
        const ctaHeadingInput = document.getElementById('input-cta-heading');
        const ctaSubtextInput = document.getElementById('input-cta-subtext');
        const ctaButtonTextInput = document.getElementById('input-cta-button-text');
        const ctaButtonUrlInput = document.getElementById('input-cta-button-url');
        const ctaBgColorInput = document.getElementById('input-cta-bgcolor');
        const ctaButtonBgColorInput = document.getElementById('input-cta-button-bgcolor');
        const ctaButtonTextColorInput = document.getElementById('input-cta-button-textcolor');

        const ctaSection = document.getElementById('preview-cta');
        const ctaHeading = document.getElementById('cta-heading');
        const ctaSubtext = document.getElementById('cta-subtext');
        const ctaButton = document.getElementById('cta-button');

        ctaHeadingInput.addEventListener('input', () => {
            ctaHeading.textContent = ctaHeadingInput.value;
        });

        ctaSubtextInput.addEventListener('input', () => {
            ctaSubtext.textContent = ctaSubtextInput.value;
        });

        ctaButtonTextInput.addEventListener('input', () => {
            ctaButton.textContent = ctaButtonTextInput.value;
        });

        ctaButtonUrlInput.addEventListener('input', () => {
            ctaButton.href = ctaButtonUrlInput.value;
        });

        ctaBgColorInput.addEventListener('input', () => {
            ctaSection.style.backgroundColor = ctaBgColorInput.value;
        });

        ctaButtonBgColorInput.addEventListener('input', () => {
            ctaButton.style.backgroundColor = ctaButtonBgColorInput.value;
        });

        ctaButtonTextColorInput.addEventListener('input', () => {
            ctaButton.style.color = ctaButtonTextColorInput.value;
        });

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            if (preview.classList.contains('hidden')) {
                preview.classList.remove('hidden');
            }

            // Logo update (als leeg -> geen logo)
            updateLogo(logoInput.files[0]);

            // Brand Name update
            updateBrandName(brandNameInput.value);

            // Colors update
            updateColors(primaryColorInput.value, secondaryColorInput.value);

            // Font update
            updateFont(fontSelect.value);
        });
    });

</script>
{{--<script>--}}
{{--    const form = document.getElementById('brandingForm');--}}

{{--    form.addEventListener('submit', e => {--}}
{{--        e.preventDefault();--}}

{{--        // Helper functie om value te pakken (optioneel fallback)--}}
{{--        const val = (id, fallback = '') => (document.getElementById(id)?.value || fallback).trim();--}}

{{--        // Verzamel data--}}
{{--        const brandName = val('brand_name', 'Your Brand');--}}
{{--        const primary = val('primary_color');--}}
{{--        const secondary = val('secondary_color');--}}
{{--        const font = val('font', 'inherit');--}}
{{--        const heroText = val('hero_text');--}}
{{--        const aboutText = val('about_text');--}}
{{--        const service1 = val('service1_title') && val('service1_desc') ? `${val('service1_title')}: ${val('service1_desc')}` : '';--}}
{{--        const team1 = val('team1_name') && val('team1_role') ? `${val('team1_name')} - ${val('team1_role')}` : '';--}}
{{--        const faq1 = val('faq1_q') && val('faq1_a') ? `${val('faq1_q')}: ${val('faq1_a')}` : '';--}}
{{--        const testimonial1 = val('testimonial1') && val('testimonial1_client') ? `"${val('testimonial1')}" - ${val('testimonial1_client')}` : '';--}}
{{--        const ctaText = `${val('cta_headline')}\n${val('cta_subtext')}\nButton: ${val('cta_button')}`;--}}

{{--        const backgroundStyle = val('background_style', 'solid');--}}
{{--        const backgroundColor = val('background_color', '#ffffff');--}}
{{--        const buttonStyle = val('button_style', 'rounded');--}}

{{--        // Toon preview--}}
{{--        const preview = document.getElementById('preview-content');--}}
{{--        if (preview) preview.classList.remove('hidden');--}}

{{--        // Update tekstuele onderdelen--}}
{{--        ['preview-brand-name', 'hero-brand-name', 'about-brand-name', 'footer-brand-name'].forEach(id => {--}}
{{--            const el = document.getElementById(id);--}}
{{--            if (el) el.textContent = brandName;--}}
{{--        });--}}

{{--        document.getElementById('footer-year').textContent = new Date().getFullYear();--}}

{{--        const setText = (id, text) => { const el = document.getElementById(id); if(el) el.textContent = text; };--}}
{{--        setText('preview-hero-text', heroText);--}}
{{--        setText('preview-about-text', aboutText);--}}
{{--        setText('preview-services-text', service1);--}}
{{--        setText('preview-team-text', team1);--}}
{{--        setText('preview-faq-text', faq1);--}}
{{--        setText('preview-testimonials-text', testimonial1);--}}
{{--        setText('preview-cta-text', ctaText);--}}

{{--        // Kleuren header/footer en font--}}
{{--        ['preview-header', 'preview-footer'].forEach(id => {--}}
{{--            const el = document.getElementById(id);--}}
{{--            if (el) el.style.backgroundColor = primary;--}}
{{--        });--}}
{{--        ['preview-header','preview-hero','preview-about','preview-services','preview-team','preview-faq','preview-testimonials','preview-cta','preview-gallery','preview-footer'].forEach(id => {--}}
{{--            const el = document.getElementById(id);--}}
{{--            if(el) el.style.fontFamily = font;--}}
{{--        });--}}

{{--        // Hero achtergrond--}}
{{--        const hero = document.getElementById('preview-hero');--}}
{{--        if(hero){--}}
{{--            if(backgroundStyle === 'solid'){--}}
{{--                hero.style.background = backgroundColor;--}}
{{--            } else if(backgroundStyle === 'gradient'){--}}
{{--                hero.style.background = `linear-gradient(135deg, ${backgroundColor}, ${secondary})`;--}}
{{--            } else if(backgroundStyle === 'pattern'){--}}
{{--                hero.style.background = `repeating-linear-gradient(45deg, ${backgroundColor}, ${backgroundColor} 10px, ${secondary} 10px, ${secondary} 20px)`;--}}
{{--            }--}}

{{--            // Kleur tekst: simpele contrast check--}}
{{--            const rgb = hexToRgb(getComputedStyle(hero).backgroundColor || backgroundColor);--}}
{{--            const brightness = (rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000;--}}
{{--            hero.style.color = brightness > 155 ? '#1f2937' : '#f6f6f6';--}}

{{--            // Button styling--}}
{{--            const btn = hero.querySelector('button');--}}
{{--            if(btn){--}}
{{--                btn.style.backgroundColor = primary;--}}
{{--                btn.style.color = 'white';--}}
{{--                btn.className = 'px-6 py-3 font-semibold transition'; // reset--}}
{{--                if(buttonStyle === 'rounded') btn.classList.add('rounded'), btn.style.boxShadow = 'none';--}}
{{--                else if(buttonStyle === 'square') btn.classList.add('rounded-none'), btn.style.boxShadow = 'none';--}}
{{--                else if(buttonStyle === 'shadow') btn.classList.add('rounded', 'shadow-lg'), btn.style.boxShadow = '';--}}
{{--            }--}}
{{--        }--}}

{{--        // Functie om hex naar rgb te converteren--}}
{{--        function hexToRgb(hex) {--}}
{{--            let c = hex.replace('#', '');--}}
{{--            if (c.length === 3) c = c.split('').map(ch => ch + ch).join('');--}}
{{--            const bigint = parseInt(c, 16);--}}
{{--            return { r: (bigint >> 16) & 255, g: (bigint >> 8) & 255, b: bigint & 255 };--}}
{{--        }--}}

{{--        // Afbeeldingen preview functies (hero, gallery, team, testimonial, logo)--}}
{{--        const previewImages = [--}}
{{--            {inputId: 'hero_image', previewId: 'preview-hero-image', fallback: 'https://picsum.photos/1200/500?random=99', isSingle: true},--}}
{{--            {inputId: 'logo', previewId: 'preview-logo', fallback: 'https://picsum.photos/150/80?random=logo', isSingle: true},--}}
{{--            {inputId: 'gallery_images', previewId: 'preview-gallery', fallbackCount: 3, fallbackBaseUrl: 'https://picsum.photos/400/250?random=', isSingle: false},--}}
{{--            {inputId: 'team_images', previewId: 'preview-team', fallbackCount: 3, fallbackBaseUrl: 'https://picsum.photos/300/200?random=team', isSingle: false},--}}
{{--            {inputId: 'testimonial_images', previewId: 'preview-testimonials', fallbackCount: 3, fallbackBaseUrl: 'https://picsum.photos/100/100?random=testimonial', isSingle: false, classes: 'rounded-full shadow w-24 h-24 object-cover mx-auto'}--}}
{{--        ];--}}

{{--        previewImages.forEach(({inputId, previewId, fallback, fallbackCount, fallbackBaseUrl, isSingle, classes}) => {--}}
{{--            const input = document.getElementById(inputId);--}}
{{--            const previewEl = document.getElementById(previewId);--}}
{{--            if(!previewEl) return;--}}

{{--            if(isSingle){--}}
{{--                if(input?.files?.[0]){--}}
{{--                    const reader = new FileReader();--}}
{{--                    reader.onload = e => {--}}
{{--                        previewEl.src = e.target.result;--}}
{{--                        previewEl.classList.remove('hidden');--}}
{{--                    };--}}
{{--                    reader.readAsDataURL(input.files[0]);--}}
{{--                } else {--}}
{{--                    previewEl.src = fallback;--}}
{{--                    previewEl.classList.remove('hidden');--}}
{{--                }--}}
{{--            } else {--}}
{{--                const container = previewEl.querySelector('.grid');--}}
{{--                if(!container) return;--}}
{{--                container.innerHTML = '';--}}
{{--                if(input?.files?.length > 0){--}}
{{--                    Array.from(input.files).forEach(file => {--}}
{{--                        const reader = new FileReader();--}}
{{--                        reader.onload = e => {--}}
{{--                            const img = document.createElement('img');--}}
{{--                            img.src = e.target.result;--}}
{{--                            img.alt = "User uploaded image";--}}
{{--                            img.className = classes || 'rounded shadow';--}}
{{--                            container.appendChild(img);--}}
{{--                        };--}}
{{--                        reader.readAsDataURL(file);--}}
{{--                    });--}}
{{--                } else {--}}
{{--                    for(let i = 1; i <= fallbackCount; i++){--}}
{{--                        const img = document.createElement('img');--}}
{{--                        img.src = fallbackBaseUrl + i;--}}
{{--                        img.alt = `Fallback image ${i}`;--}}
{{--                        img.className = classes || 'rounded shadow';--}}
{{--                        container.appendChild(img);--}}
{{--                    }--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}



</body>
</html>

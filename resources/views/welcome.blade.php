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

<!-- Form -->
<form id="brandingForm" class="w-full md:w-1/3 order-2 md:order-none bg-white p-8 flex flex-col gap-6 shadow-lg" enctype="multipart/form-data">
    <h2 class="text-3xl font-extrabold mb-6">Branding Sandbox</h2>

    <label class="block">
        <span class="text-gray-700 font-semibold">Upload Logo</span>
        <input type="file" name="logo" id="logo" accept="image/*" class="mt-2 block w-full rounded border border-gray-300 p-2" />
    </label>

    <label class="block">
        <span class="text-gray-700 font-semibold">Recent Project Images</span>
        <input type="file" name="gallery_images" id="gallery_images" accept="image/*" multiple class="mt-2 block w-full rounded border border-gray-300 p-2" />
    </label>

    <label class="block">
        <span class="text-gray-700 font-semibold">Primary Color</span>
        <input type="color" name="primary_color" id="primary_color" value="#2e3a59" class="mt-2 block w-full h-10 rounded" />
    </label>

    <label class="block">
        <span class="text-gray-700 font-semibold">Secondary Color</span>
        <input type="color" name="secondary_color" id="secondary_color" value="#e0e0e0" class="mt-2 block w-full h-10 rounded" />
    </label>

    <label class="block">
        <span class="text-gray-700 font-semibold">Background Style Preview</span>
        <select name="background_style" id="background_style" class="mt-2 block w-full rounded border border-gray-300 p-2">
            <option value="solid">Solid Color</option>
            <option value="gradient">Gradient</option>
            <option value="pattern">Pattern (Stripes)</option>
        </select>
    </label>

    <label class="block" id="bg_color_picker_label">
        <span class="text-gray-700 font-semibold">Background Color</span>
        <input type="color" name="background_color" id="background_color" value="#f3f4f6" class="mt-2 block w-full h-10 rounded" />
    </label>

    <label class="block">
        <span class="text-gray-700 font-semibold">Button Style</span>
        <select name="button_style" id="button_style" class="mt-2 block w-full rounded border border-gray-300 p-2">
            <option value="rounded">Rounded</option>
            <option value="square">Square</option>
            <option value="shadow">With Shadow</option>
        </select>
    </label>

    <label class="block">
        <span class="text-gray-700 font-semibold">Font</span>
        <select name="font" id="font" class="mt-2 block w-full rounded border border-gray-300 p-2">
            <option value="Arial, sans-serif">Arial (Sans-serif)</option>
            <option value="'Helvetica Neue', Helvetica, Arial, sans-serif">Helvetica Neue</option>
            <option value="'Times New Roman', serif">Times New Roman (Serif)</option>
            <option value="Georgia, serif">Georgia</option>
            <option value="'Courier New', monospace">Courier New (Monospace)</option>
            <option value="Verdana, Geneva, sans-serif">Verdana</option>
            <option value="'Trebuchet MS', sans-serif">Trebuchet MS</option>
            <option value="'Lucida Console', monospace">Lucida Console</option>
            <option value="'Comic Sans MS', cursive, sans-serif">Comic Sans MS</option>
        </select>
    </label>

    <label class="block">
        <span class="text-gray-700 font-semibold">Brand Name (optional)</span>
        <input type="text" name="brand_name" id="brand_name" placeholder="Name or slogan" class="mt-2 block w-full rounded border border-gray-300 p-2" />
    </label>

    <div class="sticky bottom-0 bg-white pt-4 mt-6 mb-6 z-10">
        <button type="submit"
                class="w-full bg-blue-700 text-white rounded-lg py-4 font-semibold text-lg shadow-md hover:bg-blue-800 transition-colors duration-300 ease-in-out">
            Generate Preview
        </button>
    </div>
</form>

<!-- Preview -->
<div id="preview" class="w-full md:w-2/3 order-1 md:order-none bg-white shadow-lg rounded flex flex-col font-sans relative">

    <!-- Placeholder -->
    <div id="preview-placeholder" class="flex items-center justify-center h-full text-gray-400 text-xl p-12">
        Fill out the form and click "Generate Preview" to see a sample.
    </div>

    <!-- Actual preview content (hidden initially) -->
    <div id="preview-content" class="hidden">

        <!-- Header -->
        <header id="preview-header" class="flex items-center justify-between p-6 text-white">
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

        <!-- Hero -->
        <section id="preview-hero" class="bg-gray flex flex-col items-center justify-center p-12 text-center">
            <h2 class="text-4xl font-bold mb-4">Welcome to <span id="hero-brand-name">Your Brand</span></h2>
            <p class="max-w-xl mb-6 text-lg">A short slogan or description about your company.</p>
            <button class="px-6 py-3 rounded font-semibold transition">Check Our Services</button>
        </section>

        <!-- Gallery -->
        <section id="preview-gallery" class="p-12 bg-gray-100 text-center">
            <h2 class="text-3xl font-bold mb-8">Recent Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <img src="https://picsum.photos/400/250?random=1" class="rounded shadow" />
                <img src="https://picsum.photos/400/250?random=2" class="rounded shadow" />
                <img src="https://picsum.photos/400/250?random=3" class="rounded shadow" />
            </div>
        </section>

        <!-- About Us -->
        <section id="preview-about" class="p-12 text-center bg-white">
            <h2 class="text-3xl font-bold mb-4">About <span id="about-brand-name">Your Brand</span></h2>
            <p class="max-w-2xl mx-auto text-lg">
                We build quality, trust, and long-lasting relationships.
            </p>
        </section>

        <!-- Testimonials -->
        <section id="preview-testimonials" class="p-12 bg-gray-200 text-center">
            <h2 class="text-3xl font-bold mb-8">What Clients Say</h2>
            <div class="flex flex-wrap justify-center gap-6">
                <blockquote class="max-w-md bg-white p-6 rounded shadow">
                    <p>"Top service and excellent communication!"</p>
                    <footer class="mt-4 font-semibold">— Client A</footer>
                </blockquote>
                <blockquote class="max-w-md bg-white p-6 rounded shadow">
                    <p>"Our project was executed perfectly."</p>
                    <footer class="mt-4 font-semibold">— Client B</footer>
                </blockquote>
            </div>
        </section>

        <!-- Footer -->
        <footer id="preview-footer" class="p-6 text-center text-white">
            &copy; <span id="footer-year">2025</span> <span id="footer-brand-name">Your Brand</span> - All rights reserved.
        </footer>
    </div>
</div>

<!-- JavaScript -->
<script>
    const form = document.getElementById('brandingForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const brandName = document.getElementById('brand_name').value || "Your Brand";
        const primary = document.getElementById('primary_color').value;
        const secondary = document.getElementById('secondary_color').value;
        const font = document.getElementById('font').value;

        const backgroundStyle = document.getElementById('background_style').value;
        const backgroundColor = document.getElementById('background_color').value;
        const buttonStyle = document.getElementById('button_style').value;

        // Hide placeholder, show preview
        document.getElementById('preview-placeholder').style.display = 'none';
        const previewContent = document.getElementById('preview-content');
        previewContent.classList.remove('hidden');

        // Branding texts
        document.getElementById('preview-brand-name').textContent = brandName;
        document.getElementById('hero-brand-name').textContent = brandName;
        document.getElementById('about-brand-name').textContent = brandName;
        document.getElementById('footer-brand-name').textContent = brandName;
        document.getElementById('footer-year').textContent = new Date().getFullYear();

        // Colors
        document.getElementById('preview-header').style.backgroundColor = primary;
        document.getElementById('preview-footer').style.backgroundColor = primary;

        const hero = document.getElementById('preview-hero');

        // Background style
        if (backgroundStyle === 'solid') {
            hero.style.background = backgroundColor;
        } else if (backgroundStyle === 'gradient') {
            hero.style.background = `linear-gradient(135deg, ${backgroundColor}, ${secondary})`;
        } else if (backgroundStyle === 'pattern') {
            hero.style.background = `
            repeating-linear-gradient(
                45deg,
                ${backgroundColor},
                ${backgroundColor} 10px,
                ${secondary} 10px,
                ${secondary} 20px
            )
        `;
        }

        // Text color based on background contrast
        hero.style.color = tinycolor(hero.style.background).isLight() ? '#1f2937' : '#f6f6f6';

        // Button styling
        const button = hero.querySelector('button');
        button.style.backgroundColor = primary;
        button.style.color = 'white';

        // Reset button classes and add according to selection
        button.className = 'px-6 py-3 font-semibold transition'; // reset
        if (buttonStyle === 'rounded') {
            button.classList.add('rounded');
            button.style.boxShadow = 'none';
        } else if (buttonStyle === 'square') {
            button.classList.add('rounded-none');
            button.style.boxShadow = 'none';
        } else if (buttonStyle === 'shadow') {
            button.classList.add('rounded', 'shadow-lg');
            button.style.boxShadow = '';
        }

        // Apply font-family
        ['preview-header', 'preview-hero', 'preview-about', 'preview-gallery', 'preview-testimonials', 'preview-footer']
            .forEach(id => document.getElementById(id).style.fontFamily = font);

        // Logo upload preview
        const logoInput = document.getElementById('logo');
        const previewLogo = document.getElementById('preview-logo');
        if (logoInput.files && logoInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewLogo.src = e.target.result;
                previewLogo.classList.remove('hidden');
            };
            reader.readAsDataURL(logoInput.files[0]);
        } else {
            previewLogo.classList.add('hidden');
        }

        // Gallery images dynamic load
        const galleryInput = document.getElementById('gallery_images');
        const gallerySection = document.getElementById('preview-gallery').querySelector('div.grid');

        // Clear existing images
        gallerySection.innerHTML = '';

        if (galleryInput.files && galleryInput.files.length > 0) {
            Array.from(galleryInput.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'rounded shadow';
                    gallerySection.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        } else {
            // fallback default images if none uploaded
            for (let i = 1; i <= 3; i++) {
                const img = document.createElement('img');
                img.src = `https://picsum.photos/400/250?random=${i}`;
                img.className = 'rounded shadow';
                gallerySection.appendChild(img);
            }
        }
    });
</script>

</body>
</html>

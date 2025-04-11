<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Yuni Wulandari - UI/UX Designer
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', sans-serif;
    }

    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 80px;
      background-color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 2rem;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 999;
  }
</style>
 </head>
 <body class="bg-blue-50 text-gray-800">
    <nav class="navbar">
      <h1 class="text-xl font-bold text-blue-600">
        Pixel by Wulan
      </h1>
    <ul class="flex space-x-6">
     <li>
      <a class="text-gray-600 hover:text-blue-600" href="#home">
       Home
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-blue-600" href="#about">
       About
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-blue-600" href="#portofolio">
       Portofolio
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-blue-600" href="#contact">
       Contact
      </a>
     </li>
    </ul>
   </nav>
  <main class="max-w-6xl mx-auto px-6 py-12">

  <section id="home" class="flex flex-col md:flex-row items-center md:items-center justify-between gap-10 pt-32">
    <!-- Text Content -->
    <div class="md:w-1/2 text-left">
      <h1 class="text-4xl font-bold leading-tight">
        Hi, I'm Yuni Wulandari<br />
        <span class="text-blue-600 text-4xl font-bold">– UI/UX Designer</span>
      </h1>
      <p class="text-gray-600 mt-4">
        Bringing meaningful digital experiences to life with over 3 years of design expertise.
      </p>
      <a  href="#contact" class="inline-block mt-6 px-6 py-3 bg-blue-400 text-white font-bold rounded-full hover:bg-blue-700">
        Get In Touch
      </a>
    </div>

    <!-- Image Content -->
    <div class="md:w-1/2 flex justify-center">
      <img
        src="{{ asset('build/assets/images/mypic1.png') }}"
        alt="Yuni Wulandari portrait"
        class="w-[353px] h-[372]"
      />
    </div>
  </section>

  <section id="about" class="my-24">
  <div class="flex flex-col md:flex-row md:items-center gap-10">
    
    <div class="md:w-1/2">
      <!-- Small About Me Label -->
      <p class="text-sm text-blue-600 mb-2 uppercase tracking-wide">
        About Me
      </p>

      <!-- Big Title -->
      <h2 class="text-4xl font-bold leading-tight">
        <span class="text-blue-600">Pixels, Passion</span><br />
        and a Bit of Coffee
      </h2>

      <!-- Space for Image -->
      <div class="mt-6">
        <img 
          src="{{ asset('build/assets/images/mypic2.png') }}" 
          alt="Yuni Wulandari smiling" 
          class="w-[320px] h-[220px]"
        />
      </div>
    </div>

    <!-- Description Text -->
    <div class="md:w-1/2 flex items-center">
      <div>
        <p class="text-gray-700 text-[16px] font-medium leading-relaxed">
          I'm Yuni Wulandari — a UI/UX designer, graphic artist, and full-time student at Binus University. I specialize in creating user-friendly interfaces and engaging digital experiences.
        </p>
        <p class="text-gray-700 text-[16px] font-medium mt-4 leading-relaxed">
          With over 3 years of experience in the design world, I've worked on everything from mobile apps to web interfaces and logos. For me, every pixel is a story that connects people and solves real problems.
        </p>
        <p class="text-gray-700 text-[16px] font-medium mt-4 leading-relaxed">
          Whether I'm wireframing a mobile app or sketching out a character, I pour passion into every step of the process — all with a curious mind and a hot cup by my side.
        </p>
      </div>
    </div>
    </div>
  </section>

   <section id="portofolio" class="my-12 text-center">
      <p class="text-sm text-blue-600 mb-2 uppercase tracking-wide">
        My Portofolio
      </p>
      <h2 class="text-4xl font-extrabold leading-tight">
        Featured
        <span class="text-blue-600">Projects</span><br />
      </h2>
      <p class="text-gray-700 mt-4">
        Explore my design services, from user interface and experience to prototyping and testing. Let's craft exceptional digital experiences together.
      </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-8">
    <div>
      <img alt="Real Estate Marketplace project" class="rounded-lg w-full object-cover" src="{{ asset('build/assets/images/Porto1.png') }}" />
      <h5 class="text-xl font-semibold mt-3 text-left">
        Real Estate Marketplace
      </h5>
      <p class="text-gray-600 text-left">
        Web Design
      </p>
    </div>

    <div>
      <img alt="ERP - POS Platform project" class="rounded-lg w-full object-cover" src="{{ asset('build/assets/images/Porto2.png') }}" />
      <h5 class="text-xl font-semibold mt-3 text-left">
        ERP - POS Platform
      </h5>
      <p class="text-gray-600 text-left">
        Web Design
      </p>
    </div>

    <div>
      <img alt="PT GIS project" class="rounded-lg w-full object-cover" src="{{ asset('build/assets/images/Porto3.png') }}" />
      <h5 class="text-xl font-semibold mt-3 text-left">
        PT GLS
      </h5>
      <p class="text-gray-600 text-left">
        Web Design
      </p>
    </div>

    <div>
      <img alt="Latent App project" class="rounded-lg w-full object-cover" src="{{ asset('build/assets/images/Porto4.png') }}" />
      <h5 class="text-xl font-semibold mt-3 text-left">
        Lestari App
      </h5>
      <p class="text-gray-600 text-left">
        Mobile App Design
      </p>
    </div>

    <div>
      <img alt="Shoppedia project" class="rounded-lg w-full object-cover" src="{{ asset('build/assets/images/Porto5.png') }}" />
      <h5 class="text-xl font-semibold mt-3 text-left">
        Siberpedia
      </h5>
      <p class="text-gray-600 text-left">
        Web Design
      </p>
    </div>

    <div>
      <img alt="Ximpley project" class="rounded-lg w-full object-cover" src="{{ asset('build/assets/images/Porto6.png') }}" />
      <h5 class="text-xl font-semibold mt-3 text-left">
        Ximply
      </h5>
      <p class="text-gray-600 text-left">
        Mobile Web Design
      </p>
    </div>
    </div>
   </section>

   <section id="contact" class="my-12 text-center">
      <p class="text-sm text-blue-600 mb-2 uppercase tracking-wide">
        Contact
      </p>
      <h2 class="text-4xl font-extrabold leading-tight">
        Get In Touch
      </h2>
      <p class="text-gray-700 mt-4">
        I'm just a message away! Fill out the form or reach me via email and let's talk about your next big idea.
      </p>
      
    <form action="{{ route('contact.store') }}" method="POST" class="max-w-2xl mx-auto mt-8 space-y-6 text-left">
      @csrf
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
          <input type="text" name="name" id="name" placeholder="Nama" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 p-3" />
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" id="email" placeholder="Email" required
             class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 p-3" />
        </div>
        <div>
          <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
          <input type="text" name="subject" id="subject" placeholder="Subjek" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 p-3" />
        </div>
        <div>
          <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
          <textarea name="message" id="message" rows="5" placeholder="Pesan" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 p-3"></textarea>
        </div>
        <div class="text-right">
          <button type="submit"
            class="px-6 py-3 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition duration-300">
            Send
          </button>
        </div>
    </form>
   </section>
  </main>
  <footer class="bg-white py-6 mt-12">
   <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center">
    <div class="text-center md:text-left">
     <p class="text-gray-600">
      Phone: +62 815 1576 5815
     </p>
     <p class="text-gray-600">
      Email:
      <a class="text-blue-600" href="mailto:yuniwulan2496@gmail.com">
       yuniwulan2496@gmail.com
      </a>
     </p>
    </div>
    <div class="flex space-x-4 mt-4 md:mt-0">
     <a class="text-gray-600 hover:text-blue-600" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a class="text-gray-600 hover:text-blue-600" href="#">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a class="text-gray-600 hover:text-blue-600" href="https://www.instagram.com/blueexzy_?igsh=OG5kaHJrbTdmMXY2">
      <i class="fab fa-instagram">
      </i>
     </a>
     <a class="text-gray-600 hover:text-blue-600" href="https://www.linkedin.com/in/yuni-wulandari-7b2641225?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
      <i class="fab fa-linkedin-in">
      </i>
     </a>
    </div>
   </div>
   <div class="text-center mt-6">
    <p class="text-gray-600">
     © 2023 Yuni Wulandari. All rights reserved.
    </p>
   </div>
  </footer>
 </body>
</html>

<style>
    .cursor {
      border-right: 2px solid;
      animation: blink 0.7s step-end infinite;
    }
    @keyframes blink {
      from, to {
        border-color: transparent;
      }
      50% {
        border-color: black;
      }
    }
  </style>

<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-6 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto lg:col-span-7">
            <p class="text-center md:text-start max-w-2xl mb-3 font-light text-gray-500 lg:mb-4 md:text-lg lg:text-xl dark:text-gray-400">Welcome to Halcyon Aegis Internet</p>

            <h1 id="dropping-text" class="text-center md:text-start max-w-2xl mb-4 text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold tracking-tight leading-tight dark:text-white">
            Architecting Tomorrow's Digital Landscape <span id="typing-text" class="cursor"></span>
              </h1>
                          <p class="text-center md:text-start max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                            We are a team of highly skilled engineers and talented designers specializing in developing digital products for SMEs at moderate cost.
                          </p>
            <div class="flex flex-col items-center justify-center space-y-4 md:flex-row md:space-x-4 md:space-y-0">
                <a href="#" class="inline-flex bg-[#166AEA] items-center justify-center px-4 py-3 text-base md:text-lg font-medium text-center text-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Have a Project?
                </a>
                <a href="#" class="inline-flex bg-[#166AEA] items-center justify-center px-4 py-3 text-base md:text-lg font-medium text-center text-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    See Projects
                </a>
            </div>

        </div>
        <div class="md:mt-0 mt-8 md:pb-0 pb-5 lg:block lg:col-span-5">
            <img src="img/pngwing 1.svg" alt="">
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
      const text = "software companies";
      let index = 0;
      const typingSpeed = 150; // Adjust typing speed here
      const typingElement = document.getElementById("typing-text");

      function type() {
        if (index < text.length) {
          typingElement.textContent += text.charAt(index);
          index++;
          setTimeout(type, typingSpeed);
        } else {
          setTimeout(() => {
            typingElement.textContent = '';
            index = 0;
            type();
          }, 2000); // Adjust delay before repeating here
        }
      }

      type();
    });
  </script>

{{-- @extends('layouts.base2') --}}
<!doctype html>
<html lang="id-ID">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>F</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">
	
	<style>
      /*
		You may need this for responsive background
		header {
			background: url('bg-425.jpg');
		}

		@media only screen and (min-width:640px) {
			header {
				background: url('bg-640.jpg');
			}
		}

		@media only screen and (min-width:768px) {
			header {
				background: url('bg-768.jpg');
			}
		}

		@media only screen and (min-width:1024px) {
			header {
				background: url('bg-1024.jpg');
			}
		}

		@media only screen and (min-width:1025px) {
			header {
				background: url('bg-max.jpg');
			}
		} */
      /* Default background by https://www.pexels.com/@knownasovan */
      header {
        background:url('{{asset('mangrove.jpg')}}');}
	</style>
</head>

<body>

	@include('layouts.components.nav')


	<header id="up" class="bg-center bg-fixed bg-no-repeat bg-center bg-cover h-screen relative">
		<!-- Overlay Background + Center Control -->
		<div class="h-screen bg-opacity-50 bg-black flex items-center justify-center" style="background:rgba(0,0,0,0.5);">
			<div class="mx-2 text-center w-1/2 glass p-7 glass-10">
				<h1 class="text-gray-500 font-bold text-2xl xs:text-4xl md:text-5xl p-2"><span class="text-white">Welcome</span></h1>
                <p class="text-gray-100 text-1xl xs:text-3xl md:text-4xl">Reticence and Endowment System for Silonay Mangrove</p>
                
                <a href="#about"><button class="p-2 my-5 mx-2 bg-transparent border-2 bg-indigo-200 bg-opacity-75 hover:bg-opacity-100 border-indigo-700 rounded hover:border-indigo-800 font-bold text-indigo-800 shadow-md transition duration-500 md:text-lg">Read More ..</button></a>
                
            </div>
        </div>
</header>
  <div class=" section">
      <section class="blog text-gray-700 body-font bg-green-200">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> Gallery</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">Images of Silonay Mangrove Ecopark</p>
            </div>
            <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
                <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                <div class="w-full relative flex items-center justify-center">
                    <button aria-label="slide backward" class="glass p-2 absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                        <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">

                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{asset('mangrove.jpg')}}" alt="black chair and white table" class="object-cover object-center galery-item  rounded-2xl" />
                            <div class="bg-opacity-30 absolute w-full h-full p-6">
                            <div><span class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900 px-2 py-1 glass">Catalog 1</span></div>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900 p-2 glass">Minimal Interior</h3>
                            </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{asset('mangrove2.jpg')}}" alt="black chair and white table" class="object-cover object-center galery-item rounded-2xl" />
                            <div class="bg-opacity-30 absolute w-full h-full p-6">
                            <div><span class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900 px-2 py-1 glass">Catalog 1</span></div>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900 p-2 glass">Minimal Interior</h3>
                            </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{asset('mangrove3.jpg')}}" alt="black chair and white table" class="object-cover object-center galery-item rounded-2xl" />
                            <div class="bg-opacity-30 absolute w-full h-full p-6">
                            <div><span class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900 px-2 py-1 glass">Catalog 1</span></div>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900 p-2 glass">Minimal Interior</h3>
                            </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{asset('mangrove4.jpg')}}" alt="black chair and white table" class="object-cover object-center galery-item rounded-2xl" />
                            <div class="bg-opacity-30 absolute w-full h-full p-6">
                            <div><span class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900 px-2 py-1 glass">Catalog 1</span></div>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900 p-2 glass">Minimal Interior</h3>
                            </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{asset('mangrove2.jpg')}}" alt="black chair and white table" class="object-cover object-center galery-item rounded-2xl" />
                            <div class="bg-opacity-30 absolute w-full h-full p-6">
                            <div><span class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900 px-2 py-1 glass">Catalog 1</span></div>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900 p-2 glass">Minimal Interior</h3>
                            </div>
                            </div>
                        </div>

                        </div>
                    </div>
                    <button aria-label="slide forward" class="glass p-2 absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
              
          </div>
        <script>
            let defaultTransform = 0;
        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7)
            defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);
        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
        </script>
      </section>
    </div>
  <div class="section">
    <style>
        .w-70 {
          width: 20rem;
          }
      </style>
      
      <section class="text-gray-700 body-font bg-green-200">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Local News and Updates</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">
                Oriental Mindoro advocates the concept of the Oriental Mindoro Loop/Circuit where travelers are encouraged to not only enjoy just one destination but to experience more than one tourism destination in the province.
                 This campaigns tourists to enter in one destination and leave in another while experiencing everything in between.          </p>
              </div>
              <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                  <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>
      
                  <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                    
                    <div class="header-content inline-flex ">
                        <div class="category-title flex-1 text-sm"> May 21, 2011 </div>
                    </div>
                    <div class="title-post font-medium">Mangrove Forest in Calapan</div>
      
                    <div class="summary-post text-base text-justify">The concrete boardwalk at Silonay Mangrove Conservation Ecopark. This 41-hectare protected area, opened on November 13, 2013 (Oriental Mindoro Foundation Day), is located on the 87-hectare Silonay Island.
 
                      <button class="bg-blue-100 text-blue-500 mt-4 block rounded p-2 text-sm "><span class="">Read more...</span></button>
                    </div>
                   
                  </div>
                </div>
                <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                    <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>
        
                    <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                      
                      <div class="header-content inline-flex ">
                          <div class="category-title flex-1 text-sm"> December 15, 2012 </div>
                      </div>
                      <div class="title-post font-medium">Silonay Mangrove Conservation Ecopark</div>
        
                      <div class="summary-post text-base text-justify">It is a haven of 14 species of mangroves, fireflies, 2 species of bats, 29 species of migratory birds, fiddler crabs and various kinds of fish. Near the entrance is a mural of Silonay species done by environmental artist AG Saño and local students.
 
                        <button class="bg-blue-100 text-blue-500 mt-4 block rounded p-2 text-sm "><span class="">Read more...</span></button>
                      </div>
                     
                    </div>
                  </div>
                  <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                    <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>
        
                    <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                      
                      <div class="header-content inline-flex ">
                          <div class="category-title flex-1 text-sm"> April 20, 2016 </div>
                      </div>
                      <div class="title-post font-medium">A green intervention</div>
        
                      <div class="summary-post text-base text-justify">Some members of Sama-samang Nagkakaisang Pamayanan ng Silonay (L-R): Mr. Benecio “Bobby” Vergara (SNPS President), Mr. Moral Bool (hpneybee farm manager), Aldwin Simblante (eco-tour manager), Mr. Ricardo Ponsones (mangrove seedling nursery manager), Mr. Francisco Fortu (Silonay Barangay Captain) and Alma Bool (full-time volunteer)
 
                        <button class="bg-blue-100 text-blue-500 mt-4 block rounded p-2 text-sm "><span class="">Read more...</span></button>
                      </div>
                     
                    </div>
                  </div>
      
              </div>
            </div>
          </section>
    <div class="section">
      
          <section class="text-gray-700 body-font bg-green-200">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Advertisement</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">
                Clinging to coastlines in the tropics, mangrove forests cover a tiny fraction of the planet’s surface, but they provide so much for so many. Now, coastal development, 
                unsustainable aquaculture and sea-level rise pose unprecedented threats to these fragile ecosystems.
          </p>
              </div>
              <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                  <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>
      
                  <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                    
                    <div class="header-content inline-flex ">
                        <div class="category-title flex-1 text-sm"> May 21, 2011 </div>
                    </div>
      
                    <div class="summary-post text-base text-justify">Mangroves can be a bit salty
                    Mangroves are the only species of trees in the world that can tolerate saltwater. 
                    Their strategy for dealing with otherwise toxic levels of salt? Excrete it through their waxy leaves.</div>

 
                      <button class="bg-blue-100 text-blue-500 mt-4 block rounded p-2 text-sm "><span class="">Read more...</span></button>
                    </div>
                   
                  </div>
                </div>
                <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                    <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>
        
                    <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                      
                      <div class="header-content inline-flex ">
                          <div class="category-title flex-1 text-sm"> December 15, 2012 </div>
                      </div>
                      <div class="summary-post text-base text-justify">Mangroves come in a variety of sizes
                        Though estimates vary, there are at least 50 — and maybe up to 110 — mangrove species, 
                        ranging in height from 2 to 10 meters, but all species feature oblong or oval-shaped leaves and
                        share an affinity for brackish habitats.

 
                        <button class="bg-blue-100 text-blue-500 mt-4 block rounded p-2 text-sm "><span class="">Read more...</span></button>
                      </div>
                     
                    </div>
                  </div>
                  <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                    <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>
        
                    <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                      
                      <div class="header-content inline-flex ">
                          <div class="category-title flex-1 text-sm"> April 20, 2016 </div>
                      </div>
                    
                      <div class="summary-post text-base text-justify">Fish flock to mangroves
                        Mangroves, specifically the underwater habitat their roots provide, offer critical nursing environments for juveniles of thousands of fish species, from 1-inch gobies to 10-foot sharks.

 
                        <button class="bg-blue-100 text-blue-500 mt-4 block rounded p-2 text-sm "><span class="">Read more...</span></button>
                      </div>
                     
                    </div>
                  </div>
      
              </div>
            </div>
          </section>
  </div>
  <div class="section">
    <section class="text-gray-700 body-font bg-green-200 p-5">
        <div class="flex flex-wrap w-full mb-20 mt-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> Feedback</h1>
           
          </div>
        <div class="relative container px-5 py-24 mx-auto">
            <div class="absolute inset-2 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style=""></iframe>
            </div>
            <div class="container px-5 py-24 mx-auto flex">
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Share your feedback and help us improve </p>
                
                <div class="relative mb-4">
                    <label for="comment" class="leading-7 text-sm text-gray-600">Rating</label>
                    <div class="flex space-x-3">
                        <svg class="w-12 h-12 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-12 h-12 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-12 h-12 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-12 h-12 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-12 h-12 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                      </div>
                </div>
                <div class="relative mb-4">
                    <label for="comment" class="leading-7 text-sm text-gray-600">Comment</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <div class="relative mb-4">
                    
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Attachments</label>
                    <input type="file" id="files" name="files" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                <p class="text-xs text-gray-500 mt-3">The comment form won't actually post anywhere as it only a demonstration, but if you click the "submit button" you'll see the form validation at work</p>
            </div>
            </div>
        </div>
        {{-- reviews --}}
        <div class="py-12 px-4 md:px-6 2xl:px-0 2xl:container 2xl:mx-auto flex justify-center items-center">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
            <div class="flex flex-col justify-start items-start w-full space-y-8">
                <div class="flex justify-start items-start">
                    <p class="text-1xl lg:text-2xl font-semibold leading-7 lg:leading-9 text-gray-800 ">Reviews</p>
                </div>
                <div class="w-full flex justify-start items-start flex-col bg-gray-50 dark:bg-gray-800 p-8">
                    <div class="flex flex-col md:flex-row justify-between w-full">
                        <div class="flex flex-row justify-between items-start">
                            <p class="text-xl md:text-2xl font-medium leading-normal text-gray-800 dark:text-white"></p>
                            <button onclick="showMenu(true)" class="ml-4 md:hidden">
                                <svg id="closeIcon" class="hidden" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg id="openIcon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="cursor-pointer mt-2 md:mt-0">
                            <svg class="dark:text-white" width="152" height="24" viewBox="0 0 152 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.5598 24.4285C17.3999 24.4291 17.2422 24.3914 17.0998 24.3185L11.9998 21.6485L6.89982 24.3185C6.73422 24.4056 6.5475 24.4444 6.3609 24.4307C6.1743 24.4169 5.9953 24.3511 5.84425 24.2407C5.6932 24.1303 5.57616 23.9797 5.50644 23.8061C5.43671 23.6324 5.4171 23.4427 5.44982 23.2585L6.44982 17.6285L2.32982 13.6285C2.20128 13.5002 2.1101 13.3394 2.06605 13.1632C2.02201 12.987 2.02677 12.8022 2.07982 12.6285C2.13778 12.4508 2.2444 12.2928 2.38757 12.1726C2.53075 12.0525 2.70475 11.9748 2.88982 11.9485L8.58982 11.1185L11.0998 5.98849C11.1817 5.81942 11.3096 5.67683 11.4687 5.57706C11.6279 5.47729 11.812 5.42438 11.9998 5.42438C12.1877 5.42438 12.3717 5.47729 12.5309 5.57706C12.6901 5.67683 12.8179 5.81942 12.8998 5.98849L15.4398 11.1085L21.1398 11.9385C21.3249 11.9648 21.4989 12.0425 21.6421 12.1626C21.7852 12.2828 21.8919 12.4408 21.9498 12.6185C22.0029 12.7922 22.0076 12.977 21.9636 13.1532C21.9196 13.3294 21.8284 13.4902 21.6998 13.6185L17.5798 17.6185L18.5798 23.2485C18.6155 23.436 18.5968 23.6297 18.526 23.8069C18.4551 23.9841 18.335 24.1374 18.1798 24.2485C17.9987 24.3754 17.7807 24.4387 17.5598 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip1)">
                                    <path
                                        d="M49.5598 24.4285C49.3999 24.4291 49.2422 24.3914 49.0998 24.3185L43.9998 21.6485L38.8998 24.3185C38.7342 24.4056 38.5475 24.4444 38.3609 24.4307C38.1743 24.4169 37.9953 24.3511 37.8443 24.2407C37.6932 24.1303 37.5762 23.9797 37.5064 23.8061C37.4367 23.6324 37.4171 23.4427 37.4498 23.2585L38.4498 17.6285L34.3298 13.6285C34.2013 13.5002 34.1101 13.3394 34.0661 13.1632C34.022 12.987 34.0268 12.8022 34.0798 12.6285C34.1378 12.4508 34.2444 12.2928 34.3876 12.1726C34.5307 12.0525 34.7047 11.9748 34.8898 11.9485L40.5898 11.1185L43.0998 5.98849C43.1817 5.81942 43.3096 5.67683 43.4687 5.57706C43.6279 5.47729 43.812 5.42438 43.9998 5.42438C44.1877 5.42438 44.3717 5.47729 44.5309 5.57706C44.6901 5.67683 44.8179 5.81942 44.8998 5.98849L47.4398 11.1085L53.1398 11.9385C53.3249 11.9648 53.4989 12.0425 53.6421 12.1626C53.7852 12.2828 53.8919 12.4408 53.9498 12.6185C54.0029 12.7922 54.0076 12.977 53.9636 13.1532C53.9196 13.3294 53.8284 13.4902 53.6998 13.6185L49.5798 17.6185L50.5798 23.2485C50.6155 23.436 50.5968 23.6297 50.526 23.8069C50.4551 23.9841 50.335 24.1374 50.1798 24.2485C49.9987 24.3754 49.7807 24.4387 49.5598 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip2)">
                                    <path
                                        d="M81.5598 24.4285C81.3999 24.4291 81.2422 24.3914 81.0998 24.3185L75.9998 21.6485L70.8998 24.3185C70.7342 24.4056 70.5475 24.4444 70.3609 24.4307C70.1743 24.4169 69.9953 24.3511 69.8443 24.2407C69.6932 24.1303 69.5762 23.9797 69.5064 23.8061C69.4367 23.6324 69.4171 23.4427 69.4498 23.2585L70.4498 17.6285L66.3298 13.6285C66.2013 13.5002 66.1101 13.3394 66.0661 13.1632C66.022 12.987 66.0268 12.8022 66.0798 12.6285C66.1378 12.4508 66.2444 12.2928 66.3876 12.1726C66.5307 12.0525 66.7047 11.9748 66.8898 11.9485L72.5898 11.1185L75.0998 5.98849C75.1817 5.81942 75.3096 5.67683 75.4687 5.57706C75.6279 5.47729 75.812 5.42438 75.9998 5.42438C76.1877 5.42438 76.3717 5.47729 76.5309 5.57706C76.6901 5.67683 76.8179 5.81942 76.8998 5.98849L79.4398 11.1085L85.1398 11.9385C85.3249 11.9648 85.4989 12.0425 85.6421 12.1626C85.7852 12.2828 85.8919 12.4408 85.9498 12.6185C86.0029 12.7922 86.0076 12.977 85.9636 13.1532C85.9196 13.3294 85.8284 13.4902 85.6998 13.6185L81.5798 17.6185L82.5798 23.2485C82.6155 23.436 82.5968 23.6297 82.526 23.8069C82.4551 23.9841 82.335 24.1374 82.1798 24.2485C81.9987 24.3754 81.7807 24.4387 81.5598 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip3)">
                                    <path
                                        d="M113.56 24.4285C113.4 24.4291 113.242 24.3914 113.1 24.3185L108 21.6485L102.9 24.3185C102.734 24.4056 102.548 24.4444 102.361 24.4307C102.174 24.4169 101.995 24.3511 101.844 24.2407C101.693 24.1303 101.576 23.9797 101.506 23.8061C101.437 23.6324 101.417 23.4427 101.45 23.2585L102.45 17.6285L98.3298 13.6285C98.2013 13.5002 98.1101 13.3394 98.0661 13.1632C98.022 12.987 98.0268 12.8022 98.0798 12.6285C98.1378 12.4508 98.2444 12.2928 98.3876 12.1726C98.5307 12.0525 98.7047 11.9748 98.8898 11.9485L104.59 11.1185L107.1 5.98849C107.182 5.81942 107.31 5.67683 107.469 5.57706C107.628 5.47729 107.812 5.42438 108 5.42438C108.188 5.42438 108.372 5.47729 108.531 5.57706C108.69 5.67683 108.818 5.81942 108.9 5.98849L111.44 11.1085L117.14 11.9385C117.325 11.9648 117.499 12.0425 117.642 12.1626C117.785 12.2828 117.892 12.4408 117.95 12.6185C118.003 12.7922 118.008 12.977 117.964 13.1532C117.92 13.3294 117.828 13.4902 117.7 13.6185L113.58 17.6185L114.58 23.2485C114.616 23.436 114.597 23.6297 114.526 23.8069C114.455 23.9841 114.335 24.1374 114.18 24.2485C113.999 24.3754 113.781 24.4387 113.56 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip4)">
                                    <path d="M135.146 16.911L131.052 12.9355L136.734 12.1081L137.256 12.032L137.488 11.558L139.998 6.42798L139.998 6.42798L140 6.42443L140.004 6.4329L142.544 11.5529L142.777 12.0225L143.296 12.0981L148.978 12.9255L144.883 16.901L144.502 17.2708L144.595 17.7934L145.595 23.4234L145.595 23.4234L145.597 23.4356L145.605 23.4463L145.56 24.4285L145.556 23.4474L145.564 23.4326L140.464 20.7626L140 20.5197L139.536 20.7626L134.436 23.4326L134.434 23.4334L135.434 17.8034L135.527 17.2808L135.146 16.911Z" stroke="currentColor" stroke-width="2" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                    <clipPath id="clip1">
                                        <rect width="24" height="24" fill="white" transform="translate(32)" />
                                    </clipPath>
                                    <clipPath id="clip2">
                                        <rect width="24" height="24" fill="white" transform="translate(64)" />
                                    </clipPath>
                                    <clipPath id="clip3">
                                        <rect width="24" height="24" fill="white" transform="translate(96)" />
                                    </clipPath>
                                    <clipPath id="clip4">
                                        <rect width="24" height="24" fill="white" transform="translate(128)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div id="menu" class="md:block">
                        <p class="mt-3 text-base leading-normal text-gray-600 dark:text-white w-full md:w-9/12 xl:w-5/6">When you want to decorate your home, the idea of choosing a decorative theme can seem daunting. Some themes seem to have an endless amount of pieces, while others can feel hard to accomplish</p>
                        <div class="hidden md:flex mt-6 flex-row justify-start items-start space-x-4">
                            <div>
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-1" />
                            </div>
                            <div>
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-2" />
                            </div>
                            <div class="hidden md:block">
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-3" />
                            </div>
                            <div class="hidden md:block">
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-4" />
                            </div>
                        </div>
                        <div class="md:hidden carousel pt-8 cursor-none" data-flickity='{ "wrapAround": true,"pageDots": false }'>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="bag" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="shoes" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell"></div>
                        </div>
                        <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                            <div>
                                <img src="https://i.ibb.co/QcqyrVG/Mask-Group.png" alt="girl-avatar" />
                            </div>
                            <div class="flex flex-col justify-start items-start space-y-2">
                                <p class="text-base font-medium leading-none text-gray-800 dark:text-white">Anna Kendrick</p>
                                <p class="text-sm leading-none text-gray-600 dark:text-white">14 July 2021</p>
                            </div>
                        </div>
                    </div>
    
                </div>
                
                <div class="w-full flex justify-start items-start flex-col bg-gray-50 dark:bg-gray-800 p-8">
                    <div class="flex flex-col md:flex-row justify-between w-full">
                        <div class="flex flex-row justify-between items-start">
                            <p class="text-xl md:text-2xl font-medium leading-normal text-gray-800 dark:text-white"></p>
                            <button onclick="showMenu(true)" class="ml-4 md:hidden">
                                <svg id="closeIcon" class="hidden" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg id="openIcon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="cursor-pointer mt-2 md:mt-0">
                            <svg class="dark:text-white" width="152" height="24" viewBox="0 0 152 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.5598 24.4285C17.3999 24.4291 17.2422 24.3914 17.0998 24.3185L11.9998 21.6485L6.89982 24.3185C6.73422 24.4056 6.5475 24.4444 6.3609 24.4307C6.1743 24.4169 5.9953 24.3511 5.84425 24.2407C5.6932 24.1303 5.57616 23.9797 5.50644 23.8061C5.43671 23.6324 5.4171 23.4427 5.44982 23.2585L6.44982 17.6285L2.32982 13.6285C2.20128 13.5002 2.1101 13.3394 2.06605 13.1632C2.02201 12.987 2.02677 12.8022 2.07982 12.6285C2.13778 12.4508 2.2444 12.2928 2.38757 12.1726C2.53075 12.0525 2.70475 11.9748 2.88982 11.9485L8.58982 11.1185L11.0998 5.98849C11.1817 5.81942 11.3096 5.67683 11.4687 5.57706C11.6279 5.47729 11.812 5.42438 11.9998 5.42438C12.1877 5.42438 12.3717 5.47729 12.5309 5.57706C12.6901 5.67683 12.8179 5.81942 12.8998 5.98849L15.4398 11.1085L21.1398 11.9385C21.3249 11.9648 21.4989 12.0425 21.6421 12.1626C21.7852 12.2828 21.8919 12.4408 21.9498 12.6185C22.0029 12.7922 22.0076 12.977 21.9636 13.1532C21.9196 13.3294 21.8284 13.4902 21.6998 13.6185L17.5798 17.6185L18.5798 23.2485C18.6155 23.436 18.5968 23.6297 18.526 23.8069C18.4551 23.9841 18.335 24.1374 18.1798 24.2485C17.9987 24.3754 17.7807 24.4387 17.5598 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip1)">
                                    <path
                                        d="M49.5598 24.4285C49.3999 24.4291 49.2422 24.3914 49.0998 24.3185L43.9998 21.6485L38.8998 24.3185C38.7342 24.4056 38.5475 24.4444 38.3609 24.4307C38.1743 24.4169 37.9953 24.3511 37.8443 24.2407C37.6932 24.1303 37.5762 23.9797 37.5064 23.8061C37.4367 23.6324 37.4171 23.4427 37.4498 23.2585L38.4498 17.6285L34.3298 13.6285C34.2013 13.5002 34.1101 13.3394 34.0661 13.1632C34.022 12.987 34.0268 12.8022 34.0798 12.6285C34.1378 12.4508 34.2444 12.2928 34.3876 12.1726C34.5307 12.0525 34.7047 11.9748 34.8898 11.9485L40.5898 11.1185L43.0998 5.98849C43.1817 5.81942 43.3096 5.67683 43.4687 5.57706C43.6279 5.47729 43.812 5.42438 43.9998 5.42438C44.1877 5.42438 44.3717 5.47729 44.5309 5.57706C44.6901 5.67683 44.8179 5.81942 44.8998 5.98849L47.4398 11.1085L53.1398 11.9385C53.3249 11.9648 53.4989 12.0425 53.6421 12.1626C53.7852 12.2828 53.8919 12.4408 53.9498 12.6185C54.0029 12.7922 54.0076 12.977 53.9636 13.1532C53.9196 13.3294 53.8284 13.4902 53.6998 13.6185L49.5798 17.6185L50.5798 23.2485C50.6155 23.436 50.5968 23.6297 50.526 23.8069C50.4551 23.9841 50.335 24.1374 50.1798 24.2485C49.9987 24.3754 49.7807 24.4387 49.5598 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip2)">
                                    <path
                                        d="M81.5598 24.4285C81.3999 24.4291 81.2422 24.3914 81.0998 24.3185L75.9998 21.6485L70.8998 24.3185C70.7342 24.4056 70.5475 24.4444 70.3609 24.4307C70.1743 24.4169 69.9953 24.3511 69.8443 24.2407C69.6932 24.1303 69.5762 23.9797 69.5064 23.8061C69.4367 23.6324 69.4171 23.4427 69.4498 23.2585L70.4498 17.6285L66.3298 13.6285C66.2013 13.5002 66.1101 13.3394 66.0661 13.1632C66.022 12.987 66.0268 12.8022 66.0798 12.6285C66.1378 12.4508 66.2444 12.2928 66.3876 12.1726C66.5307 12.0525 66.7047 11.9748 66.8898 11.9485L72.5898 11.1185L75.0998 5.98849C75.1817 5.81942 75.3096 5.67683 75.4687 5.57706C75.6279 5.47729 75.812 5.42438 75.9998 5.42438C76.1877 5.42438 76.3717 5.47729 76.5309 5.57706C76.6901 5.67683 76.8179 5.81942 76.8998 5.98849L79.4398 11.1085L85.1398 11.9385C85.3249 11.9648 85.4989 12.0425 85.6421 12.1626C85.7852 12.2828 85.8919 12.4408 85.9498 12.6185C86.0029 12.7922 86.0076 12.977 85.9636 13.1532C85.9196 13.3294 85.8284 13.4902 85.6998 13.6185L81.5798 17.6185L82.5798 23.2485C82.6155 23.436 82.5968 23.6297 82.526 23.8069C82.4551 23.9841 82.335 24.1374 82.1798 24.2485C81.9987 24.3754 81.7807 24.4387 81.5598 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip3)">
                                    <path
                                        d="M113.56 24.4285C113.4 24.4291 113.242 24.3914 113.1 24.3185L108 21.6485L102.9 24.3185C102.734 24.4056 102.548 24.4444 102.361 24.4307C102.174 24.4169 101.995 24.3511 101.844 24.2407C101.693 24.1303 101.576 23.9797 101.506 23.8061C101.437 23.6324 101.417 23.4427 101.45 23.2585L102.45 17.6285L98.3298 13.6285C98.2013 13.5002 98.1101 13.3394 98.0661 13.1632C98.022 12.987 98.0268 12.8022 98.0798 12.6285C98.1378 12.4508 98.2444 12.2928 98.3876 12.1726C98.5307 12.0525 98.7047 11.9748 98.8898 11.9485L104.59 11.1185L107.1 5.98849C107.182 5.81942 107.31 5.67683 107.469 5.57706C107.628 5.47729 107.812 5.42438 108 5.42438C108.188 5.42438 108.372 5.47729 108.531 5.57706C108.69 5.67683 108.818 5.81942 108.9 5.98849L111.44 11.1085L117.14 11.9385C117.325 11.9648 117.499 12.0425 117.642 12.1626C117.785 12.2828 117.892 12.4408 117.95 12.6185C118.003 12.7922 118.008 12.977 117.964 13.1532C117.92 13.3294 117.828 13.4902 117.7 13.6185L113.58 17.6185L114.58 23.2485C114.616 23.436 114.597 23.6297 114.526 23.8069C114.455 23.9841 114.335 24.1374 114.18 24.2485C113.999 24.3754 113.781 24.4387 113.56 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip4)">
                                    <path d="M135.146 16.911L131.052 12.9355L136.734 12.1081L137.256 12.032L137.488 11.558L139.998 6.42798L139.998 6.42798L140 6.42443L140.004 6.4329L142.544 11.5529L142.777 12.0225L143.296 12.0981L148.978 12.9255L144.883 16.901L144.502 17.2708L144.595 17.7934L145.595 23.4234L145.595 23.4234L145.597 23.4356L145.605 23.4463L145.56 24.4285L145.556 23.4474L145.564 23.4326L140.464 20.7626L140 20.5197L139.536 20.7626L134.436 23.4326L134.434 23.4334L135.434 17.8034L135.527 17.2808L135.146 16.911Z" stroke="currentColor" stroke-width="2" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                    <clipPath id="clip1">
                                        <rect width="24" height="24" fill="white" transform="translate(32)" />
                                    </clipPath>
                                    <clipPath id="clip2">
                                        <rect width="24" height="24" fill="white" transform="translate(64)" />
                                    </clipPath>
                                    <clipPath id="clip3">
                                        <rect width="24" height="24" fill="white" transform="translate(96)" />
                                    </clipPath>
                                    <clipPath id="clip4">
                                        <rect width="24" height="24" fill="white" transform="translate(128)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div id="menu" class="md:block">
                        <p class="mt-3 text-base leading-normal text-gray-600 dark:text-white w-full md:w-9/12 xl:w-5/6">When you want to decorate your home, the idea of choosing a decorative theme can seem daunting. Some themes seem to have an endless amount of pieces, while others can feel hard to accomplish</p>
                        <div class="hidden md:flex mt-6 flex-row justify-start items-start space-x-4">
                            <div>
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-1" />
                            </div>
                            <div>
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-2" />
                            </div>
                            <div class="hidden md:block">
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-3" />
                            </div>
                            <div class="hidden md:block">
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-4" />
                            </div>
                        </div>
                        <div class="md:hidden carousel pt-8 cursor-none" data-flickity='{ "wrapAround": true,"pageDots": false }'>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="bag" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="shoes" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell"></div>
                        </div>
                        <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                            <div>
                                <img src="https://i.ibb.co/QcqyrVG/Mask-Group.png" alt="girl-avatar" />
                            </div>
                            <div class="flex flex-col justify-start items-start space-y-2">
                                <p class="text-base font-medium leading-none text-gray-800 dark:text-white">Anna Kendrick</p>
                                <p class="text-sm leading-none text-gray-600 dark:text-white">14 July 2021</p>
                            </div>
                        </div>
                    </div>
    
                </div>

                <div class="w-full flex justify-start items-start flex-col bg-gray-50 dark:bg-gray-800 p-8">
                    <div class="flex flex-col md:flex-row justify-between w-full">
                        <div class="flex flex-row justify-between items-start">
                            <p class="text-xl md:text-2xl font-medium leading-normal text-gray-800 dark:text-white"></p>
                            <button onclick="showMenu(true)" class="ml-4 md:hidden">
                                <svg id="closeIcon" class="hidden" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg id="openIcon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="cursor-pointer mt-2 md:mt-0">
                            <svg class="dark:text-white" width="152" height="24" viewBox="0 0 152 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.5598 24.4285C17.3999 24.4291 17.2422 24.3914 17.0998 24.3185L11.9998 21.6485L6.89982 24.3185C6.73422 24.4056 6.5475 24.4444 6.3609 24.4307C6.1743 24.4169 5.9953 24.3511 5.84425 24.2407C5.6932 24.1303 5.57616 23.9797 5.50644 23.8061C5.43671 23.6324 5.4171 23.4427 5.44982 23.2585L6.44982 17.6285L2.32982 13.6285C2.20128 13.5002 2.1101 13.3394 2.06605 13.1632C2.02201 12.987 2.02677 12.8022 2.07982 12.6285C2.13778 12.4508 2.2444 12.2928 2.38757 12.1726C2.53075 12.0525 2.70475 11.9748 2.88982 11.9485L8.58982 11.1185L11.0998 5.98849C11.1817 5.81942 11.3096 5.67683 11.4687 5.57706C11.6279 5.47729 11.812 5.42438 11.9998 5.42438C12.1877 5.42438 12.3717 5.47729 12.5309 5.57706C12.6901 5.67683 12.8179 5.81942 12.8998 5.98849L15.4398 11.1085L21.1398 11.9385C21.3249 11.9648 21.4989 12.0425 21.6421 12.1626C21.7852 12.2828 21.8919 12.4408 21.9498 12.6185C22.0029 12.7922 22.0076 12.977 21.9636 13.1532C21.9196 13.3294 21.8284 13.4902 21.6998 13.6185L17.5798 17.6185L18.5798 23.2485C18.6155 23.436 18.5968 23.6297 18.526 23.8069C18.4551 23.9841 18.335 24.1374 18.1798 24.2485C17.9987 24.3754 17.7807 24.4387 17.5598 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip1)">
                                    <path
                                        d="M49.5598 24.4285C49.3999 24.4291 49.2422 24.3914 49.0998 24.3185L43.9998 21.6485L38.8998 24.3185C38.7342 24.4056 38.5475 24.4444 38.3609 24.4307C38.1743 24.4169 37.9953 24.3511 37.8443 24.2407C37.6932 24.1303 37.5762 23.9797 37.5064 23.8061C37.4367 23.6324 37.4171 23.4427 37.4498 23.2585L38.4498 17.6285L34.3298 13.6285C34.2013 13.5002 34.1101 13.3394 34.0661 13.1632C34.022 12.987 34.0268 12.8022 34.0798 12.6285C34.1378 12.4508 34.2444 12.2928 34.3876 12.1726C34.5307 12.0525 34.7047 11.9748 34.8898 11.9485L40.5898 11.1185L43.0998 5.98849C43.1817 5.81942 43.3096 5.67683 43.4687 5.57706C43.6279 5.47729 43.812 5.42438 43.9998 5.42438C44.1877 5.42438 44.3717 5.47729 44.5309 5.57706C44.6901 5.67683 44.8179 5.81942 44.8998 5.98849L47.4398 11.1085L53.1398 11.9385C53.3249 11.9648 53.4989 12.0425 53.6421 12.1626C53.7852 12.2828 53.8919 12.4408 53.9498 12.6185C54.0029 12.7922 54.0076 12.977 53.9636 13.1532C53.9196 13.3294 53.8284 13.4902 53.6998 13.6185L49.5798 17.6185L50.5798 23.2485C50.6155 23.436 50.5968 23.6297 50.526 23.8069C50.4551 23.9841 50.335 24.1374 50.1798 24.2485C49.9987 24.3754 49.7807 24.4387 49.5598 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip2)">
                                    <path
                                        d="M81.5598 24.4285C81.3999 24.4291 81.2422 24.3914 81.0998 24.3185L75.9998 21.6485L70.8998 24.3185C70.7342 24.4056 70.5475 24.4444 70.3609 24.4307C70.1743 24.4169 69.9953 24.3511 69.8443 24.2407C69.6932 24.1303 69.5762 23.9797 69.5064 23.8061C69.4367 23.6324 69.4171 23.4427 69.4498 23.2585L70.4498 17.6285L66.3298 13.6285C66.2013 13.5002 66.1101 13.3394 66.0661 13.1632C66.022 12.987 66.0268 12.8022 66.0798 12.6285C66.1378 12.4508 66.2444 12.2928 66.3876 12.1726C66.5307 12.0525 66.7047 11.9748 66.8898 11.9485L72.5898 11.1185L75.0998 5.98849C75.1817 5.81942 75.3096 5.67683 75.4687 5.57706C75.6279 5.47729 75.812 5.42438 75.9998 5.42438C76.1877 5.42438 76.3717 5.47729 76.5309 5.57706C76.6901 5.67683 76.8179 5.81942 76.8998 5.98849L79.4398 11.1085L85.1398 11.9385C85.3249 11.9648 85.4989 12.0425 85.6421 12.1626C85.7852 12.2828 85.8919 12.4408 85.9498 12.6185C86.0029 12.7922 86.0076 12.977 85.9636 13.1532C85.9196 13.3294 85.8284 13.4902 85.6998 13.6185L81.5798 17.6185L82.5798 23.2485C82.6155 23.436 82.5968 23.6297 82.526 23.8069C82.4551 23.9841 82.335 24.1374 82.1798 24.2485C81.9987 24.3754 81.7807 24.4387 81.5598 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip3)">
                                    <path
                                        d="M113.56 24.4285C113.4 24.4291 113.242 24.3914 113.1 24.3185L108 21.6485L102.9 24.3185C102.734 24.4056 102.548 24.4444 102.361 24.4307C102.174 24.4169 101.995 24.3511 101.844 24.2407C101.693 24.1303 101.576 23.9797 101.506 23.8061C101.437 23.6324 101.417 23.4427 101.45 23.2585L102.45 17.6285L98.3298 13.6285C98.2013 13.5002 98.1101 13.3394 98.0661 13.1632C98.022 12.987 98.0268 12.8022 98.0798 12.6285C98.1378 12.4508 98.2444 12.2928 98.3876 12.1726C98.5307 12.0525 98.7047 11.9748 98.8898 11.9485L104.59 11.1185L107.1 5.98849C107.182 5.81942 107.31 5.67683 107.469 5.57706C107.628 5.47729 107.812 5.42438 108 5.42438C108.188 5.42438 108.372 5.47729 108.531 5.57706C108.69 5.67683 108.818 5.81942 108.9 5.98849L111.44 11.1085L117.14 11.9385C117.325 11.9648 117.499 12.0425 117.642 12.1626C117.785 12.2828 117.892 12.4408 117.95 12.6185C118.003 12.7922 118.008 12.977 117.964 13.1532C117.92 13.3294 117.828 13.4902 117.7 13.6185L113.58 17.6185L114.58 23.2485C114.616 23.436 114.597 23.6297 114.526 23.8069C114.455 23.9841 114.335 24.1374 114.18 24.2485C113.999 24.3754 113.781 24.4387 113.56 24.4285V24.4285Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <g clip-path="url(#clip4)">
                                    <path d="M135.146 16.911L131.052 12.9355L136.734 12.1081L137.256 12.032L137.488 11.558L139.998 6.42798L139.998 6.42798L140 6.42443L140.004 6.4329L142.544 11.5529L142.777 12.0225L143.296 12.0981L148.978 12.9255L144.883 16.901L144.502 17.2708L144.595 17.7934L145.595 23.4234L145.595 23.4234L145.597 23.4356L145.605 23.4463L145.56 24.4285L145.556 23.4474L145.564 23.4326L140.464 20.7626L140 20.5197L139.536 20.7626L134.436 23.4326L134.434 23.4334L135.434 17.8034L135.527 17.2808L135.146 16.911Z" stroke="currentColor" stroke-width="2" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                    <clipPath id="clip1">
                                        <rect width="24" height="24" fill="white" transform="translate(32)" />
                                    </clipPath>
                                    <clipPath id="clip2">
                                        <rect width="24" height="24" fill="white" transform="translate(64)" />
                                    </clipPath>
                                    <clipPath id="clip3">
                                        <rect width="24" height="24" fill="white" transform="translate(96)" />
                                    </clipPath>
                                    <clipPath id="clip4">
                                        <rect width="24" height="24" fill="white" transform="translate(128)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div id="menu" class="md:block">
                        <p class="mt-3 text-base leading-normal text-gray-600 dark:text-white w-full md:w-9/12 xl:w-5/6">When you want to decorate your home, the idea of choosing a decorative theme can seem daunting. Some themes seem to have an endless amount of pieces, while others can feel hard to accomplish</p>
                        <div class="hidden md:flex mt-6 flex-row justify-start items-start space-x-4">
                            <div>
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-1" />
                            </div>
                            <div>
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-2" />
                            </div>
                            <div class="hidden md:block">
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-3" />
                            </div>
                            <div class="hidden md:block">
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-4" />
                            </div>
                        </div>
                        <div class="md:hidden carousel pt-8 cursor-none" data-flickity='{ "wrapAround": true,"pageDots": false }'>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="bag" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="shoes" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="md:w-full h-full relative">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="wallet" class="w-full h-full object-fit object-cover" />
                                </div>
                            </div>
                            <div class="carousel-cell"></div>
                        </div>
                        <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                            <div>
                                <img src="https://i.ibb.co/QcqyrVG/Mask-Group.png" alt="girl-avatar" />
                            </div>
                            <div class="flex flex-col justify-start items-start space-y-2">
                                <p class="text-base font-medium leading-none text-gray-800 dark:text-white">Anna Kendrick</p>
                                <p class="text-sm leading-none text-gray-600 dark:text-white">14 July 2021</p>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        
         <style>.carousel-cell {
  width: 150px;
  height: 150px;

  margin-right: 24px;
  counter-increment: carousel-cell;
}

.carousel-cell:before {
  display: block;
  width: 20%;
}

.flickity-slider {
  position: absolute;
  width: 100%;
  height: 100%;
  left: -260px !important;
}

.flickity-button {
  position: absolute !important;
  inset: 0 !important;
  top: 50% !important;
  left: 80% !important;
  background: white;
  border: 0px;
  color: #27272a;
}

.flickity-prev-next-button:hover {
  background-color: #27272a;
  color: white;
}

.flickity-prev-next-button.previous {
  visibility: hidden;
}

.flickity-prev-next-button.next {
  margin-left: 50px;
  width: 48px;
  height: 48px;
  visibility: hidden;
}

.flickity-enabled.is-draggable .flickity-viewport {
  cursor: none;
  cursor: default;
}

.flickity-prev-next-button .flickity-button-icon {
  margin-left: 2px;
  margin-top: 2px;
  width: 24px;
  height: 24px;
}
</style>
<script>let menu = document.getElementById("menu");
let closeIcon = document.getElementById("closeIcon");
let openIcon = document.getElementById("openIcon");
const showMenu = (flag) => {
  if (flag) {
    menu.classList.toggle("hidden");
    closeIcon.classList.toggle("hidden");
    openIcon.classList.toggle("hidden");
  }
};

let menu2 = document.getElementById("menu2");
let closeIcon2 = document.getElementById("closeIcon2");
let openIcon2 = document.getElementById("openIcon2");
const showMenu2 = (flag) => {
  if (flag) {
    menu2.classList.toggle("hidden");
    closeIcon2.classList.toggle("hidden");
    openIcon2.classList.toggle("hidden");
  }
};
</script>
      </section>
  </div>
  <div class="section">
    <section class="text-gray-700 body-font bg-green-200">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> Contact Us</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">
                Need to get in touch with us? Either fill out the form with your inquiry or 
                find the miraplesregine24@gmail.com you'd like to contact below.         </p>
          </div>
          <div class="relative flex items-top justify-center sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8 overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 mr-2 bg-gray-100 sm:rounded-lg">
                            <h1 class="text-4xl sm:text-5xl text-gray-800 font-extrabold tracking-tight">
                                Our Address
                            </h1>
                            <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 mt-2">
            
                                Silonay Mangrove Conservation Ecopark: Sitio Singalong, Brgy. Silonay, Calapan City.  Open daily, 6AM – 6PM. 

                                Admission: PhP50/head (PhP20 for students).

                            </p>
    
                            <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-60">
                                       Silonay, Calapan City, Oriental Mindoro

                                </div>
                            </div>
    
                            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                    09279501242

                                </div>
                            </div>
    
                            <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                    miraplesregine24@gmail.com

                                </div>
                            </div>
                        </div>
    
                        <form class="p-6 flex flex-col justify-center">
                            <div class="flex flex-col">
                                <label for="name" class="hidden">Full Name</label>
                                <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-gray-400 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                            </div>
    
                            <div class="flex flex-col mt-2">
                                <label for="email" class="hidden">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-gray-400 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                            </div>
    
                            <div class="flex flex-col mt-2">
                                <label for="tel" class="hidden">Number</label>
                                <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-gray-400 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                            </div>
    
                            <button type="submit" class="md:w-32 bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
  </div>
  <script src="{{ asset('js/jq.js') }}"></script>
<script>
    $('#nav-open').click((e)=>{
        $('#nav-opened').fadeToggle('slow')
    })
</script>
  </body>
</html>
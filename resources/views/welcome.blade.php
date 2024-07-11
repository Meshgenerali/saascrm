<x-guest-layout>

<section class="bg-blue-600 text-white">
    <div class="container mx-auto flex flex-col md:flex-row items-center py-16 px-4 md:px-6 lg:px-8">
      <div class="md:w-1/2 md:pr-10">
        <h1 class="text-4xl lg:text-5xl font-bold mb-4">Manage Your Customer Relationships Effortlessly</h1>
        <p class="text-lg mb-6">Our CRM software helps you keep track of your customers and improve your relationship with them, leading to increased customer satisfaction and business growth.</p>
        <a href="#" class="bg-white text-blue-600 font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-gray-200">Get Started</a>
      </div>
      <div class="md:w-1/2 mt-10 md:mt-0">
        <img src="{{asset('images/undraw_Growing_re_olpi.png')}}" alt="CRM illustration" class="w-full h-auto rounded-lg shadow-lg">
      </div>
    </div>
  </section>

  @livewire('plans-pricing')

</x-guest-layout>
<aside id="filtrePr" class="fixed mt-16 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-200 ">
       <div>
        <div class="">

          <!-- Filter by Property Type -->
          <div class="bg-white shadow-md rounded-md p-4">
            <h2 class="text-lg font-semibold mb-4">Property Type</h2>
            <ul class="space-y-2">
              <li>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-primary-500">
                  <span class="ml-2">House</span>
                </label>
              </li>
              <li>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-primary-500">
                  <span class="ml-2">Apartment</span>
                </label>
              </li>
              <li>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-primary-500">
                  <span class="ml-2">Condo</span>
                </label>
              </li>
              <li>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-primary-500">
                  <span class="ml-2">Townhouse</span>
                </label>
              </li>
            </ul>
          </div>
        
          <!-- Filter by Price Range -->
          <div class="bg-white shadow-md rounded-md p-4">
            <h2 class="text-lg font-semibold mb-4">Price Range</h2>
              <input type="number" class="form-input flex-grow" placeholder="Min Price">
              <input type="number" class="form-input flex-grow" placeholder="Max Price">
          </div>
        
          <!-- Filter by Bedrooms -->
          <div class="bg-white shadow-md rounded-md p-4">
            <h2 class="text-lg font-semibold mb-4">Bedrooms</h2>
            <input type="number" class="form-input flex-grow" placeholder="number of Bedrooms">
          </div>
        </div>
       </div>
    </div>
 </aside>
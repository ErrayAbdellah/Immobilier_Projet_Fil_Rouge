<aside id="filtrePr" class="fixed pb-8 mt-16 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    {{-- <div > --}}
       
        <form action="{{ route('filterPost')}}" method="POST" class="h-full px-3 py-4 overflow-y-auto bg-gray-200 pb-16">
            @csrF
            <!-- Filter by Property Type -->
            <div class="bg-white shadow-md rounded-md p-4 my-1">
                <h2 class="text-lg font-semibold mb-4">Property Type</h2>
                <select name="Filterpost_type" id="post_type" class="block  p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
                    <option selected>Choose a type</option>
                    @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
          </div>
          
          <!-- Filter by Price Range -->
          <div class="bg-white shadow-md rounded-md p-4 my-1">
            <h2 class="text-lg font-semibold mb-4">Price Range</h2>
              <input name="filterMinPrice" type="number"class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 " placeholder="Min Price">
              <input name="filterMaxPrice" type="number"class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 " placeholder="Max Price">
            </div>
        
          <!-- Filter by Bedrooms -->
          <div class="bg-white shadow-md rounded-md p-4 my-1">
              <h2 class="text-lg font-semibold mb-4">Bedrooms</h2>
              <input name="filterNumBedrooms" type="number"class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 " placeholder="number of Bedrooms">
            </div>
            <!-- Filter by Outdoor Features -->
            <div class="bg-white shadow-md rounded-md p-4 my-1">
                @foreach($outdoorFeatures as $outdoorFeature)
                    <input type="checkbox" name="filterOutdoor_features[]" value="{{ $outdoorFeature->id }}" id="outdoor_feature_{{ $outdoorFeature->id }}" class="w-4 mt-2 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 border-2">
                    <label for="outdoor_feature_{{ $outdoorFeature->id }}" class="w-full py-3 ml-2 mb-5 text-sm font-medium text-gray-900">{{ $outdoorFeature->name }} </label><br>
                @endforeach
            </div>
            <input type="submit" value="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
        </form>

    {{-- </div> --}}
 </aside>
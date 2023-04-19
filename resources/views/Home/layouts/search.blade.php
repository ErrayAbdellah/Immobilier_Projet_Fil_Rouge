<style>
  .scrollComement{
    
    ::-webkit-scrollbar-track{
            background: #ffffff6b
        }
    ::-webkit-scrollbar-thumb{
        /* background: linear-gradient(to right,); */
        background: #83838389;
        border-radius:20px;
    }
    ::-webkit-scrollbar-thumb:hover{
        background: #000000da;
        /* background: linear-gradient(to right,#02a1dbda,#a8cf45ce); */
    }
    ::-webkit-scrollbar{
        width: 7px;
        height: 4px;
    }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

<div class=" flex justify-center mt-4">
         
    <div class="right-0 h-auto w-3/5 rounded-t shadow-green-500\/50"  style="background-color: #f0f4f4;">
      <ul
        class="flex list-none flex-wrap rounded-xl p-1"
        data-tabs="tabs"
        role="list"
      >
        <li class="flex-auto text-center">
          <button
            class="text-slate-700 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
            data-tab-target=""
            active=""
            role="tab"
            aria-selected="true"
            aria-controls="app"
            data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button"
          >
            <span class="ml-1">Buy</span>
            <!-- Modal toggle -->
            <!-- <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
              Toggle modal
            </button> -->
          </button>
        </li>
        <li class="flex-auto text-center">
          <button
            class="text-slate-700 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
            data-tab-target=""
            role="tab"
            aria-selected="false"
            aria-controls="message"
            data-modal-target="RentModel" data-modal-toggle="RentModel" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button"

          >
            <span class="ml-1">Rent</span>
          </button>
        </li>
      </ul>
      <div class="p-10">
        <!-- <p>Find your merchandise by searching for it</p> -->
        
        <h1 class="mb-4 text-2xl font-extrabold text-gray-900 md:text-4xl lg:text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Reale</span> State.</h1>
        <p class="text-lg font-normal text-gray-500 lg:text-xl ">Here at Flowbite we focus on markets where technology.</p>

      </div>
    </div>

</div>


<!-- Main modal -->
<div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t ">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Buy
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="staticModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('filterPost')}}" method="POST" class="h-full px-3 py-4 overflow-y-auto bg-gray-200 ">
              @csrF
              <!-- Filter by Property Type -->
              <div class="bg-white shadow-md rounded-md p-4 my-1">
                  <h2 class="text-lg font-semibold mb-4">Property Type</h2>
                  <select name="Filterpost_type" id="post_type" class="block  p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
                      <option selected>Choose a type</option>
                      @foreach($types as $type)
                      <option value="{{ $type->id }}" >{{ $type->name }}</option>
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
              <div class="bg-white shadow-md rounded-md p-4 my-1" id="Bedrooms">
                  <h2 class="text-lg font-semibold mb-4">Bedrooms</h2>
                  <input name="filterNumBedrooms" type="number"class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 " placeholder="number of Bedrooms">
                </div>
                <!-- Filter by Outdoor Features -->
                <div class="bg-white shadow-md rounded-md p-4 my-1" id="outdoorFeatures">
                    @foreach($outdoorFeatures as $outdoorFeature)
                        <input type="checkbox" name="filterOutdoor_features[]" value="{{ $outdoorFeature->id }}" id="outdoor_feature_{{ $outdoorFeature->id }}" class="w-4 mt-2 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 border-2">
                        <label for="outdoor_feature_{{ $outdoorFeature->id }}" class="w-full py-3 ml-2 mb-5 text-sm font-medium text-gray-900">{{ $outdoorFeature->name }} </label><br>
                    @endforeach
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                  <input type="submit" value="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                  <button data-modal-hide="RentModel" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Decline</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Main modal -->
<div id="RentModel" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 mt-5 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="mt-14 mt-14 overflow-scroll scrollComement relative w-full h-full max-w-2xl md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow ">
          <!-- Modal header -->
          <div class="flex items-start justify-between p-4 border-b rounded-t ">
              <h3 class="text-xl font-semibold text-gray-900">
                  Rent
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="RentModel">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
              </button>
          </div>
          <!-- Modal body -->
          <form action="{{ route('filterPost')}}" method="POST" class="h-full px-3 py-4 overflow-y-auto bg-gray-200 ">
              @csrF
              <!-- Filter by Property Type -->
              <div class="bg-white shadow-md rounded-md p-4 my-1">
                  <h2 class="text-lg font-semibold mb-4">Property Type</h2>
                  <select name="Filterpost_type" id="post_type" class="block  p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
                      <option selected>Choose a type</option>
                      @foreach($types as $type)
                      <option value="{{ $type->id }}" >{{ $type->name }}</option>
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
            <div class="bg-white shadow-md rounded-md p-4 my-1" id="Bedrooms">
                <h2 class="text-lg font-semibold mb-4">Bedrooms</h2>
                <input name="filterNumBedrooms" type="number"class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 " placeholder="number of Bedrooms">
              </div>
              <!-- Filter by Outdoor Features -->
              <div class="bg-white shadow-md rounded-md p-4 my-1" id="outdoorFeatures">
                  @foreach($outdoorFeatures as $outdoorFeature)
                      <input type="checkbox" name="filterOutdoor_features[]" value="{{ $outdoorFeature->id }}" id="outdoor_feature_{{ $outdoorFeature->id }}" class="w-4 mt-2 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 border-2">
                      <label for="outdoor_feature_{{ $outdoorFeature->id }}" class="w-full py-3 ml-2 mb-5 text-sm font-medium text-gray-900">{{ $outdoorFeature->name }} </label><br>
                  @endforeach
              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                <input type="submit" value="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <button data-modal-hide="RentModel" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Decline</button>
              </div>
          </form>
      </div>
  </div>
</div>


<script>
  $('#post_type').on('change', function() {
  var value = $(this).val();
  if(value == 4){
    $("#Bedrooms").hide();
    $("#outdoorFeatures").hide();
  }else{
    $("#Bedrooms").show();
    $("#outdoorFeatures").show();
  }
});
</script>
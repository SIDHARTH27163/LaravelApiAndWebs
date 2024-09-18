@props(['name', 'type' => 'text', 'value' => '', 'placeholder' => ' ', 'class' => '', 'id' => '', 'label' => '','error'=>''])

<div class="px-1 max-w-xs my-6">
    <label for="example3" class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $label }}</label>
    <input id="example3" type="file"   name="{{ $name }}"  multiple class="block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-primary-500 file:py-2.5 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-primary-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
    @if ($error)
    <p class="text-red-600 text-sm mt-2 font-playwrite italic">{{ $error }}</p>
@endif
  </div>

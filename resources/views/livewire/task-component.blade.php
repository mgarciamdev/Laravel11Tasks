<div>
    <!-- component -->
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- ====== Table Section Start -->
<section class="bg-dark-600">
   <div class="container">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
            <div class="max-w-full overflow-x-auto">
                <button class="bg-green-800 text-white px-8 py-2 mb-6 rounded-md hover:bg-green-700">
                    Nuevo
                </button>
               <table class="table-auto w-full">
                  <thead>
                     <tr class="bg-green-800 text-center">
                        <th
                           class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           border-l border-transparent
                           "
                           >
                           Titulo
                        </th>
                        <th
                           class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                           Descripcion
                        </th>
                        <th
                           class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                           Acciones
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($tasks as $task)
                     <tr>
                        <td
                           class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "
                           >
                           {{ $task->title }}
                        </td>
                        <td
                           class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           "
                           >
                            {{ $task->description }}
                        </td>
                        <td
                           class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           "
                           >
                            <button class="bg-yellow-800 text-white px-4 py-2 rounded-md hover:bg-yellow-700">
                                Editar
                            </button>
                            <button class="bg-red-800 text-white px-4 py-2 rounded-md hover:bg-red-700">
                                Eliminar
                            </button>
                        </td>
                        @endforeach
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Table Section End -->           
</div>
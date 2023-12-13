<!-- Total Customer Shimmer -->
<div class="relative p-[16px] bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
    <!-- Header -->
    <div class="flex items-center justify-between mb-[16px]">
        <div class="shimmer w-[150px] h-[17px]"></div>

        <div class="shimmer w-[79px] h-[21px]"></div>
    </div>

    <div class="grid gap-4">
        <div class="flex gap-4 place-content-start">
            <div class="flex gap-4 items-center">
                <div class="shimmer w-[120px] h-[36px]"></div>
                <div class="shimmer w-[75px] h-[17px]"></div>
            </div>
        </div>

        <div class="shimmer w-[120px] h-[20px]"></div>

        <!-- Graph Shimmer -->
        <x-admin::shimmer.reporting.graph/>

        <!-- Date Range -->
        <div class="flex gap-5 justify-center">
            <div class="flex gap-1 items-center">
                <div class="shimmer w-[14px] h-[14px] rounded-[3px]"></div>
                <div class="shimmer w-[143px] h-[17px]"></div>
            </div>
            
            <div class="flex gap-1 items-center">
                <div class="shimmer w-[14px] h-[14px] rounded-[3px]"></div>
                <div class="shimmer w-[143px] h-[17px]"></div>
            </div>
        </div>
    </div>
</div>
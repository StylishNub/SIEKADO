<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<h1 class="text-9 font-bold mt-[40px] mb-10">Manajemen Pertanyaan</h1>
<div class="relative overflow-x-auto overflow-y-auto max-h-[500px] shadow-md sm:rounded-lg bg-blue-800">
    <div class="flex justify-start mt-4 mb-4">
        <a href="/manajemen_pertanyaan/tambah_pertanyaan" class="flex gap-1 bg-green-400 hover:bg-white items-center text-black rounded-lg font-montserrat font-medium py-2 px-4" style="margin-left: 12px;">
            Add
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </a>
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-black uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Pertanyaan
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            <?php $no = 1; ?>
            <?php foreach ($pertanyaan as $index => $r) : ?>
                <tr class="<?= $index % 2 === 0 ? 'bg-white' : 'bg-white' ?> border-b mr-6">
                    <td class="px-6 py-4 font-medium text-black truncate max-w-[100px]">
                        <?= $no++; ?>
                    </td>
                    <td class="px-6 py-4 font-medium text-black truncate max-w-[100px]">
                        <?= $r['pertanyaan']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center">
                            <a class="mr-2" href="/manajemen_pertanyaan/edit_pertanyaan/<?= $r['id']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                            <a class="mr-2" href="/manajemen_pertanyaan/delete_pertanyaan/<?= $r['id']; ?>" onclick="return confirm('Are you sure you want to delete this question?');">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
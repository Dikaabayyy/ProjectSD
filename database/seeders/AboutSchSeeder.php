<?php

namespace Database\Seeders;

use App\Models\AboutSch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutSch::create([
            'name' => 'Tentang SD YPKP 2 Sentani',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed leo tortor. Maecenas rhoncus ac enim in fringilla. Mauris velit felis, imperdiet ut pretium et, finibus eget lectus. Vivamus quis elementum felis. Curabitur erat velit, semper sed ultricies id, bibendum ut metus. Morbi nec lectus a risus rutrum placerat sed ut ex. Nullam finibus nunc neque, nec ultricies nisi varius dictum. Integer nec facilisis orci. Nunc placerat turpis quam, eget dictum est volutpat sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
Suspendisse potenti. Cras vitae turpis sed mauris pulvinar tincidunt eget eu augue. Quisque facilisis lorem quis ullamcorper mollis. Pellentesque ac ornare augue. Maecenas auctor sagittis vehicula. Vivamus ultricies sed turpis sit amet finibus. Fusce facilisis diam eu mi suscipit, non consequat sapien rhoncus. Curabitur augue felis, tincidunt in risus ac, viverra posuere massa.
Aenean leo justo, aliquam eu arcu id, accumsan suscipit neque. Proin cursus felis turpis, nec lobortis ante tincidunt ut. Sed vulputate pellentesque neque, vel interdum nulla fermentum at. Vestibulum lacinia porttitor nisl, vitae sollicitudin enim tincidunt quis. Proin vel orci vel nisl ultricies ultricies. Nullam id tincidunt tortor. Integer in porttitor nunc. Aenean vitae aliquet ligula. Nam nisi nibh, mollis et feugiat vitae, tincidunt vitae arcu. Aliquam vel ultrices risus, eu pellentesque ante.
Mauris et hendrerit dui. Ut dapibus euismod justo non rutrum. Aenean elit nulla, placerat vitae lobortis gravida, commodo quis turpis. Duis vulputate mi lectus, sit amet luctus ex dignissim ac. Fusce auctor a turpis eleifend interdum. Nullam urna velit, pretium ut volutpat id, tempus non leo. Sed convallis vel erat in consequat. Curabitur gravida consectetur elit, in accumsan orci congue a. Quisque at lectus fringilla sem finibus mollis. Curabitur ac dolor venenatis, lacinia augue ut, ornare nulla. Pellentesque ullamcorper accumsan tortor consequat eleifend. Phasellus a ornare turpis, vel congue neque. Sed eros nisi, condimentum vitae metus eget, porttitor elementum lacus.
Integer et libero at orci fringilla aliquet. Morbi nec urna a nisi faucibus vulputate a nec magna. Sed nec aliquam risus, non iaculis dolor. Donec nisl metus, euismod vel rutrum a, porta eget dolor. Sed mattis nibh elit, sed sagittis arcu gravida id. Integer sed tristique turpis. Mauris finibus arcu vel lorem porttitor efficitur. Curabitur eget nisi sed massa euismod feugiat id vitae nisl. Pellentesque volutpat id diam at viverra. Curabitur rhoncus neque ac vulputate faucibus. Duis in justo tincidunt erat finibus fermentum ac in sapien. Duis consectetur metus sit amet velit accumsan venenatis id quis turpis.',
            'slug' => 'aboutsch'
        ]);
    }
}

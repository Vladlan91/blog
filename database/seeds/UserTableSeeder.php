<?php


use App\User;

class UserTableSeeder extends \Illuminate\Database\Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['id'=>'1', 'name'=>'Іваніцький Владислав', 'email'=>'ivanitskiyvv32@gmail.com', 'password'=>'$2y$10$oNSxjpLP6NQkdDq0O8vA/.f3Wgu4Tot9dEamPjwFvyXe9zYNQqMYm', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28', 'status'=>'active', 'role'=>'owner']);
    }
}

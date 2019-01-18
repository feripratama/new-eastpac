<?php

use Illuminate\Database\Seeder;

class UserWalletsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_wallets')->delete();
        
        \DB::table('user_wallets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '1',
                'address' => '12217ed6adedfb6f85a0c3284eee6df53c7910c4',
                'key_file_content' => '{"address":"12217ed6adedfb6f85a0c3284eee6df53c7910c4","id":"964dad2a-24b5-4166-8725-cdf7bcd8a273","version":3,"Crypto":{"cipher":"aes-128-ctr","cipherparams":{"iv":"d3eefb79760f5d332acc32647d58d8d3"},"ciphertext":"58e415193d12a0f4a718b95be00fb4594b99aaad7efc6dacf2cce9c2a352dd56","kdf":"scrypt","kdfparams":{"salt":"08c8230f81bddb7c37c78cf9982347760f2495c18d4dd9edb961f040e78df9e2","n":131072,"dklen":32,"p":1,"r":8},"mac":"6f2ff899cd6ac65cc9d71f685f2af11746d7e4ebb75ed4576278b26ae1e2ff72"}}',
                'key_file_name' => 'UTC--2019-01-12T06-18-40.0Z--12217ed6adedfb6f85a0c3284eee6df53c7910c4',
                'mnemonic' => 'tribe miss buzz book elder crowd apart over tone viable pair fluid',
                'path' => 'tribe miss buzz book elder crowd apart over tone viable pair fluid',
                'private_key' => '0xe0468935e22d9e0e2ae21f466872f61da00944ee212e637f13288471de2145fc',
                'wallet_address' => '0x12217eD6adEdFB6f85a0C3284eEe6Df53C7910c4',
                'created_at' => '2019-01-12 06:18:40',
                'updated_at' => '2019-01-12 06:18:40',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '2',
                'address' => 'ad00a6d6b37794f3712422b4f65b9a5266bcf9c0',
                'key_file_content' => '{"address":"ad00a6d6b37794f3712422b4f65b9a5266bcf9c0","id":"18449e6c-e4f9-4a0e-b275-7cca086168b7","version":3,"Crypto":{"cipher":"aes-128-ctr","cipherparams":{"iv":"34d9f1917f5070fe45eb81920ee118ac"},"ciphertext":"ccdfe85253a56a9230dc54156a308895d82776575ebfc7ee5995886e4ebfba89","kdf":"scrypt","kdfparams":{"salt":"00eac60896c12c58245d528e94dcb2da3badcecf4742ed32303b988cbe81574e","n":131072,"dklen":32,"p":1,"r":8},"mac":"3fe8f7d0470e4eb7dd40fb975927f62898ed57c9ac2b0ccc985225915206b4c1"}}',
                'key_file_name' => 'UTC--2019-01-12T06-21-03.0Z--ad00a6d6b37794f3712422b4f65b9a5266bcf9c0',
                'mnemonic' => 'pelican pencil train sausage blue sketch will acoustic can because brother rain',
                'path' => 'pelican pencil train sausage blue sketch will acoustic can because brother rain',
                'private_key' => '0x42dc392a5400ae598f262a7062f5384ff64a165770a90961d4eb8b88b253e2ca',
                'wallet_address' => '0xaD00A6d6B37794F3712422B4F65B9a5266BcF9C0',
                'created_at' => '2019-01-12 06:21:03',
                'updated_at' => '2019-01-12 06:21:03',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '3',
                'address' => '88afbf9ea78cce7a953b10518980b8ae33c2258f',
                'key_file_content' => '{"address":"88afbf9ea78cce7a953b10518980b8ae33c2258f","id":"e55b2447-62c0-4001-bb2d-3816b2eeb283","version":3,"Crypto":{"cipher":"aes-128-ctr","cipherparams":{"iv":"fdbf9516071649d6684475f39a34c43f"},"ciphertext":"141ec2ab4baab08d8a2158b08b7f38be29cda33669aba344adce526891d02eef","kdf":"scrypt","kdfparams":{"salt":"9851be5d46b8a85c6b60e044f1aec45eb7538831b96220d47995ad34c10ec0c5","n":131072,"dklen":32,"p":1,"r":8},"mac":"f1eeea4691ba95e28c029f6b06ea9ecaae885ec6737770db38c268aada256b48"}}',
                'key_file_name' => 'UTC--2019-01-12T06-21-52.0Z--88afbf9ea78cce7a953b10518980b8ae33c2258f',
                'mnemonic' => 'film snap labor cinnamon wish afraid daring crawl salmon today mansion resist',
                'path' => 'film snap labor cinnamon wish afraid daring crawl salmon today mansion resist',
                'private_key' => '0x27022522a82b2e2348d732fa6db6d0870b6bfe124efd2c33b3f7e8b24671ce41',
                'wallet_address' => '0x88AFBf9ea78cce7a953b10518980B8aE33c2258f',
                'created_at' => '2019-01-12 06:21:52',
                'updated_at' => '2019-01-12 06:21:52',
            ),
        ));
        
        
    }
}
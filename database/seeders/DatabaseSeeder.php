<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\LessonProgress;
use App\Models\Subscription;
use App\Models\SubscriptionPackage;
use App\Models\Training;
use App\Models\TrainingCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'alya.rahman@example.com'],
            [
                'name' => 'Alya Rahman',
                'phone' => '+62 812 4000 1199',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'membership_status' => 'Professional',
            ],
        );

        $packages = [
            ['Basic', 299000, 30, ['Akses 8 training dasar', 'Progress belajar', 'Sertifikat digital'], false],
            ['Professional', 699000, 90, ['Semua training fase MVP', 'Materi update bulanan', 'Template pajak praktis', 'Prioritas webinar'], true],
            ['Enterprise', 2400000, 365, ['Akses tim hingga 10 user', 'Learning path perusahaan', 'Sesi konsultasi placeholder', 'Laporan progress UI'], false],
        ];

        foreach ($packages as [$name, $price, $days, $features, $popular]) {
            SubscriptionPackage::updateOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name, 'price' => $price, 'access_days' => $days, 'features' => $features, 'is_popular' => $popular],
            );
        }

        $professional = SubscriptionPackage::where('slug', 'professional')->first();
        Subscription::updateOrCreate(
            ['user_id' => $user->id, 'subscription_package_id' => $professional->id],
            ['status' => 'active', 'starts_at' => now()->subDays(8), 'ends_at' => now()->addDays(82)],
        );

        $categories = collect(['Pajak Pribadi', 'Pajak Badan', 'PPN', 'Brevet', 'Tax Planning'])
            ->mapWithKeys(fn ($name) => [$name => TrainingCategory::updateOrCreate(['slug' => Str::slug($name)], ['name' => $name])]);

        $trainings = [
            ['Pajak Pribadi dari Nol', 'Pajak Pribadi', '4 jam', 18, 'Dina Maharani, BKP', 'Pelajari dasar pelaporan SPT pribadi, penghasilan, pengurang, dan simulasi pengisian tahunan.', true],
            ['PPN Praktis untuk Bisnis', 'PPN', '6 jam', 24, 'Raka Aditya, CTA', 'Panduan operasional PPN, faktur pajak, kredit pajak masukan, dan rekonsiliasi transaksi.', true],
            ['Brevet A/B Intensif', 'Brevet', '18 jam', 52, 'Tax Academy Team', 'Kurikulum intensif Brevet A/B dengan latihan kasus dan rangkuman konsep kunci.', true],
            ['Tax Planning UMKM', 'Tax Planning', '5 jam', 20, 'Naufal Putra', 'Strategi kepatuhan dan perencanaan pajak yang realistis untuk bisnis skala kecil dan menengah.', true],
            ['Pajak Badan Komprehensif', 'Pajak Badan', '8 jam', 32, 'Mira Santoso', 'Memahami koreksi fiskal, PPh badan, angsuran, dan dokumentasi laporan keuangan fiskal.', true],
            ['Rekonsiliasi Pajak Bulanan', 'Pajak Badan', '3 jam', 14, 'Andi Wijaya', 'Workflow rekonsiliasi transaksi bulanan agar laporan pajak lebih rapi dan mudah diaudit.', true],
            ['E-Faktur dan Coretax', 'PPN', '4 jam', 16, 'Laras Permata', 'Simulasi alur faktur pajak digital, approval, retur, dan arsip transaksi.', false],
            ['Withholding Tax Masterclass', 'Pajak Badan', '7 jam', 28, 'Bima Prasetya', 'Kupas PPh 21, 23, 26, dan final melalui studi kasus transaksi bisnis harian.', false],
        ];

        foreach ($trainings as [$title, $category, $duration, $lessonCount, $instructor, $description, $featured]) {
            $training = Training::updateOrCreate(
                ['slug' => Str::slug($title)],
                [
                    'training_category_id' => $categories[$category]->id,
                    'title' => $title,
                    'duration' => $duration,
                    'instructor' => $instructor,
                    'description' => $description,
                    'is_featured' => $featured,
                    'status' => 'published',
                ],
            );

            for ($i = 1; $i <= min(8, $lessonCount); $i++) {
                Lesson::updateOrCreate(
                    ['training_id' => $training->id, 'sort_order' => $i],
                    [
                        'module_title' => 'Module '.ceil($i / 3).': '.($i <= 3 ? 'Fundamental' : ($i <= 6 ? 'Praktik' : 'Finalisasi')),
                        'title' => ['Orientasi Platform', 'Konsep Dasar Pajak', 'Istilah yang Sering Dipakai', 'Membaca Bukti Potong', 'Simulasi Pengisian', 'Review Kesalahan Umum', 'Checklist Kepatuhan', 'Ringkasan dan Sertifikat'][$i - 1],
                        'description' => 'Materi pembelajaran backend-ready untuk '.$title.'.',
                        'duration_minutes' => 8 + $i,
                    ],
                );
            }
        }

        $firstTraining = Training::where('slug', 'pajak-pribadi-dari-nol')->first();
        foreach ($firstTraining->lessons()->take(5)->get() as $lesson) {
            LessonProgress::updateOrCreate(
                ['user_id' => $user->id, 'lesson_id' => $lesson->id],
                ['training_id' => $firstTraining->id, 'completed_at' => now()->subDays(2), 'last_watched_at' => now()->subDay()],
            );
        }
    }
}

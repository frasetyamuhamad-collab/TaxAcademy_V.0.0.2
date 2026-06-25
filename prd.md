# PRODUCT REQUIREMENT DOCUMENT (PRD)

# Tax Learning Platform

## FASE 1 — CUSTOMER PORTAL UI MVP

Version: 1.0
Status: Approved for UI Development
Technology: Laravel 12 + Blade + Livewire 3

---

# 1. PRODUCT OVERVIEW

## Product Name

Tax Learning Platform

## Product Vision

Menjadi platform edukasi perpajakan digital yang menyediakan pelatihan online, konsultasi, dan membership dalam satu ekosistem terintegrasi.

## Product Description

Platform berbasis web yang memungkinkan pengguna untuk:

* Mendaftar akun
* Mengakses training perpajakan
* Menonton video pembelajaran
* Melihat progress belajar
* Berlangganan membership

Pada fase pertama fokus utama adalah pembangunan User Interface (UI) dan User Experience (UX) tanpa implementasi backend production.

---

# 2. PRODUCT GOALS

## Business Goals

* Memiliki platform training mandiri
* Mengurangi ketergantungan pada platform pihak ketiga
* Mengembangkan recurring revenue melalui membership
* Mengumpulkan database customer sendiri
* Menyiapkan fondasi platform digital perpajakan

## User Goals

* Belajar kapan saja dan dimana saja
* Mengakses training dengan mudah
* Melihat perkembangan belajar
* Menemukan materi perpajakan secara cepat

---

# 3. PROJECT SCOPE

## Included in Phase 1

### Public Area

* Landing Page
* Training Catalog
* Training Detail
* Pricing Page
* Login Page
* Register Page

### Member Area

* User Dashboard
* Learning Page
* Subscription Page
* User Profile

### Shared Features

* Responsive Design
* Dark Mode
* Navigation
* Search UI
* Dummy Data Integration

---

## Excluded in Phase 1

* Admin Panel
* Real Authentication
* Database Integration
* Payment Gateway
* Email Service
* Live Chat
* Ticketing
* Mobile App
* Reporting Dashboard
* Backend API

---

# 4. USER ROLES

## Guest User

Permissions:

* View Landing Page
* View Training Catalog
* View Training Detail
* Register Account
* Login

---

## Member User

Permissions:

* Access Dashboard
* View Training Catalog
* Access Learning Page
* View Progress
* Manage Profile
* Access Subscription Page

---

# 5. USER JOURNEY

## Journey 1 — Registration

Landing Page
→ Register
→ Login
→ Dashboard

---

## Journey 2 — Browse Training

Dashboard
→ Training Catalog
→ Training Detail
→ Start Learning

---

## Journey 3 — Learning

Video Learning
→ Complete Lesson
→ Progress Updated
→ Continue Learning

---

## Journey 4 — Subscription

Dashboard
→ Subscription Page
→ Select Package
→ Checkout Placeholder

---

# 6. FUNCTIONAL REQUIREMENTS

# FR-001 LANDING PAGE

## Purpose

Menampilkan informasi perusahaan dan produk.

## Sections

### Navbar

* Logo
* Home
* Training
* Pricing
* Login
* Register

### Hero Section

* Headline
* Description
* CTA Button

### Statistics

* Total Student
* Total Training
* Completion Rate

### Featured Training

Menampilkan maksimal 6 training.

### Benefits Section

* Expert Instructor
* Flexible Learning
* Certification

### Pricing Section

* Basic
* Professional
* Enterprise

### Testimonials

* Student Reviews

### FAQ

Accordion FAQ

### Footer

* About
* Contact
* Social Media

---

# FR-002 REGISTER PAGE

## Fields

* Full Name
* Email
* Phone Number
* Password
* Confirm Password

## Validation UI

* Required Validation
* Email Format Validation
* Password Match Validation

## Actions

* Register Button
* Redirect Login

---

# FR-003 LOGIN PAGE

## Fields

* Email
* Password

## Actions

* Login Button
* Forgot Password Link

---

# FR-004 USER DASHBOARD

## Components

### Welcome Card

Menampilkan nama user.

### Learning Summary

* Total Training
* Completed
* In Progress

### Continue Learning

Menampilkan training terakhir.

### Recommended Training

Menampilkan rekomendasi.

### Progress Chart

Visualisasi progress belajar.

---

# FR-005 TRAINING CATALOG

## Features

### Search

Pencarian berdasarkan:

* Judul
* Kategori

### Categories

* Pajak Pribadi
* Pajak Badan
* PPN
* Brevet
* Tax Planning

### Layout

Grid Card

### Pagination UI

10 item per halaman.

---

# FR-006 TRAINING DETAIL

## Components

* Thumbnail
* Title
* Category
* Description
* Duration
* Instructor
* Lesson Count

## Actions

* Start Learning
* Subscribe Now

---

# FR-007 VIDEO LEARNING PAGE

## Layout

### Sidebar

* Module List
* Lesson List

### Main Content

* Video Player Placeholder
* Lesson Title
* Lesson Description

### Progress Tracking UI

* Progress Bar
* Completed Status

### Continue Learning

Menampilkan lesson terakhir.

---

# FR-008 SUBSCRIPTION PAGE

## Packages

### Basic

* 30 Days Access

### Professional

* 90 Days Access

### Enterprise

* 365 Days Access

## Components

* Pricing Cards
* Comparison Table
* FAQ
* CTA Button

---

# FR-009 USER PROFILE

## Data

* Profile Photo
* Full Name
* Email
* Phone
* Membership Status

## Features

### Edit Profile

UI Form

### Change Password

UI Form

---

# 7. NON-FUNCTIONAL REQUIREMENTS

## Performance

* Page Load < 3 Seconds
* Optimized Assets

## Responsive

### Mobile

375px

### Tablet

768px

### Desktop

1440px

---

## Accessibility

* Keyboard Navigation
* Accessible Form Labels
* Semantic HTML

---

## Security (Future Phase)

* Authentication
* Authorization
* CSRF Protection
* Input Validation

---

# 8. UI/UX REQUIREMENTS

## Design Style

Modern SaaS Platform

## UI Characteristics

* Clean
* Professional
* Premium
* Minimalist

---

## Color Palette

Primary

#1E40AF

Secondary

#3B82F6

Success

#16A34A

Danger

#DC2626

Background

#F8FAFC

Dark Background

#0F172A

---

## Typography

Font Family:

Inter

---

# 9. TECHNOLOGY STACK

## Framework

Laravel 12

## Frontend

Blade Template Engine

## Interactivity

Livewire 3

## Styling

TailwindCSS

## UI Library

Flowbite

## Icons

Heroicons

## Database

MySQL (Future Phase)

## Authentication

Laravel Breeze (Future Phase)

---

# 10. SYSTEM ARCHITECTURE

resources/views

* layouts
* pages
* components
* auth
* dashboard
* training
* learning
* subscription
* profile

app/Livewire

* Landing
* Dashboard
* Training
* Learning
* Subscription
* Profile

---

# 11. ROUTING STRUCTURE

Public Routes

/
/training
/training/{slug}
/pricing
/login
/register

Member Routes

/dashboard
/learning
/profile
/subscription

---

# 12. MOCK DATA REQUIREMENTS

Semua halaman menggunakan dummy data.

## User

* Name
* Email
* Membership

## Training

* Title
* Description
* Category
* Duration

## Progress

* Percentage
* Last Lesson

## Subscription

* Package
* Price
* Features

---

# 13. RESPONSIVE REQUIREMENTS

## Mobile First

Semua halaman harus dimulai dari desain mobile.

### Breakpoints

sm: 640px

md: 768px

lg: 1024px

xl: 1280px

2xl: 1536px

---

# 14. ACCEPTANCE CRITERIA

## Landing Page

* Semua section tampil
* Responsive
* CTA aktif

## Authentication

* Form tampil
* Validation UI tampil

## Dashboard

* Summary tampil
* Progress tampil

## Training

* Search UI tampil
* Filter UI tampil

## Learning

* Video placeholder tampil
* Progress UI tampil

## Subscription

* Semua paket tampil

## Profile

* Form profile tampil

---

# 15. AI DEVELOPMENT WORKFLOW

## PHASE 1 — UI FIRST DEVELOPMENT

AI wajib membuat seluruh tampilan terlebih dahulu.

Tidak diperbolehkan membuat:

* Migration
* Database
* Seeder
* API
* Authentication Logic
* Payment Integration

Fokus hanya pada:

* UI
* UX
* Component Reusability
* Responsive Design

---

## Development Order

### Step 1

Setup Laravel + Tailwind + Livewire

### Step 2

Create Design System

### Step 3

Create Layout

### Step 4

Landing Page

### Step 5

Authentication Pages

### Step 6

Dashboard

### Step 7

Training Pages

### Step 8

Learning Page

### Step 9

Subscription Page

### Step 10

Profile Page

---

# 16. AI CODING RULES

1. Laravel 12 wajib digunakan.
2. Gunakan Blade Component.
3. Gunakan TailwindCSS.
4. Gunakan Livewire 3.
5. Tidak boleh menggunakan inline CSS.
6. Semua halaman responsive.
7. Gunakan reusable component.
8. Support dark mode.
9. Dummy data hardcoded.
10. Clean folder structure.

---

# 17. DELIVERABLES

## Phase 1 Deliverables

### UI Application

* Landing Page
* Login Page
* Register Page
* Dashboard
* Training Catalog
* Training Detail
* Learning Page
* Subscription Page
* Profile Page

### Source Code

* Laravel Project
* Blade Components
* Tailwind Configuration
* Livewire Components

### Documentation

* Setup Guide
* Folder Structure
* Component Documentation

---

# 18. ESTIMATED TIMELINE

Week 1

* Project Setup
* Design System
* Layout

Week 2

* Landing Page
* Login
* Register

Week 3

* Dashboard
* Training Catalog

Week 4

* Training Detail
* Learning Page

Week 5

* Subscription
* Profile

Week 6

* Responsive Testing
* Bug Fixing
* Final Review

---

# 19. SUCCESS METRICS

## Technical

* Lighthouse > 85
* Mobile Responsive
* Dark Mode Working
* No Critical UI Bugs

## Business

* User dapat melihat training
* User dapat melakukan simulasi belajar
* User dapat melihat paket subscription
* Siap masuk ke fase backend development

END OF DOCUMENT

import React from 'react';
import { usePage } from '@inertiajs/react';
import Navigation from './components/Navigation';  
import ServicesClient from './ServicesClient';
import HabitatsClient from './HabitatsClient';
import ReviewsClient from './ReviewsClient';
import ContactsClient from './ContactsClient';
import Accueil from './components/Accueil';

const Home = () => {
    // Récupérer les services et habitats via Inertia
    const { services, habitats, animals} = usePage().props;
    console.log(services, habitats);  // Vérifier si les données sont correctement reçues

    return (
        <div className="min-h-screen flex flex-col">
            {/* Navigation en haut */}
            <Navigation />
            <main className="pt-16 relative"> 
                <Accueil services={services} habitats={habitats} animals={animals}/>
                <ServicesClient services={services} /> 
                <HabitatsClient habitats={habitats} /> 
                <ReviewsClient />
                <ContactsClient />
            </main>
        </div>
    );
};

export default Home;
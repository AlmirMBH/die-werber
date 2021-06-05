<?php

namespace App\Helpers\Languages;

class Questions
{
    public static function getLanguages(){
        return [
            'en' => [
                'title' => "Frequently asked questions",
                'faq-title-1' => "I have a business but I do not know how to reach clients. Can you help me?",
                'faq-text-1' => "Yes, we can. Clients are extremely important to businesses and they invest a lot of time and resources in retaining and expanding their client bases. You are certainly not the only client with this challenge and we can help you even if you are starting from scratch. We can determine your target audience, develop a PR and Marketing plan and manage your social networks. In addition, we can design or re-design your website and optimize it for search engines.",
                'faq-title-2' => "Can you digitalise my business processes?",
                'faq-text-2' => "We can digitalize almost anything. If you want to streamline your business processes we can certainly help you.",
                'faq-title-3' => "Do you offer customized services?",
                'faq-text-3' => "Yes. We have a range of standardized services but we also customize our services in accordance with the requirements of our clients.",
                'faq-title-4' => "Do you offer 24/7 support to your clients?",
                'faq-text-4' => "Of course. All our clients can contact our support center at any time.",
                'faq-title-5' => "How do I know that I need IT services for my business?",
                'faq-text-5' => "If you have repetitive tasks that require a lot of time and resources, you can certainly benefit from our services. Online orders and reservations, automatic response and support chats, various software or a website are within our scope of services.",
                'faq-title-6' => "Do you offer support to companies and their IT professionals?",
                'faq-text-6' => "Yes. If you already have IT professionals who sometimes need consulting services, we are the right team for you. You can certainly benefit from our partner network, experience in programming, web development, graphic design, maintenance etc.",
                'faq-title-7' => "Do you conclude project partnership contracts with other companies?",
                'faq-text-7' => "It is our pleasure to learn from and work with other companies on common projects.",
            ],
            'de' => [
                'title' => "Häufig gestellte Fragen",
                'faq-title-1' => "Ich habe ein Geschäft, weiss aber nicht, wie ich Kunden erreichen kann. Können Sie mir helfen?",
                'faq-text-1' => "Ja, das können wir! Kunden sind für Unternehmen äusserst wichtig und sie investieren viel Zeit und Ressourcen, um ihren Kundenstamm halten und erweitern zu können. Sie sind sicherlich nicht der einzige Kunde mit dieser Herausforderung und wir können Ihnen helfen, auch wenn Sie von vorne anfangen. Wir können Ihre Zielgruppe ermitteln, einen PR- und Marketingplan entwickeln und Ihre sozialen Netzwerke verwalten. Darüber hinaus können wir Ihre Website entwerfen oder umgestalten und für Suchmaschinen optimieren.",
                'faq-title-2' => "Können Sie meine Geschäftsprozesse digitalisieren?",
                'faq-text-2' => "Wir können fast alles digitalisieren. Wenn Sie Ihre Geschäftsprozesse optimieren möchten, können wir Ihnen sicherlich weiterhelfen.",
                'faq-title-3' => "Bieten Sie massgeschneiderte Dienstleistungen an?",
                'faq-text-3' => "Ja. Wir haben eine Reihe standardisierter Dienstleistungen, aber wir passen unsere Dienstleistungen auch an die Anforderungen unserer Kunden an.",
                'faq-title-4' => "Bieten Sie Ihren Kunden 24/7 Support an?",
                'faq-text-4' => "Na sicher. Alle unsere Kunden können sich jederzeit an unser Support-Center wenden.",
                'faq-title-5' => "Woher weiss ich, dass ich IT-Services für mein Unternehmen benötige?",
                'faq-text-5' => "Wenn Sie wiederholende Aufgaben haben, die viel Zeit und Ressourcen erfordern, können Sie auf jeden Fall von unseren Dienstleistungen profitieren. Online-Bestellungen und -Reservierungen, automatische Antwort- und Support-Chats, verschiedene Software oder eine Website gehören zu unserem Leistungsumfang.",
                'faq-title-6' => "Unterstützen Sie Unternehmen und deren IT-Experten?",
                'faq-text-6' => "Ja. Wenn Sie bereits IT-Experten haben, die manchmal Beratungsdienste benötigen, sind wir das richtige Team für Sie. Sie können sicher von unserem Partnernetzwerk, unserer Erfahrung in Programmierung, Webentwicklung, Grafikdesign, Wartung usw. profitieren.",
                'faq-title-7' => "Schliessen Sie Projektpartnerschaftsverträge mit anderen Unternehmen ab?",
                'faq-text-7' => "Es ist uns eine Freude, von anderen Unternehmen zu lernen und mit ihnen an gemeinsamen Projekten zu arbeiten.",
            ],
            // Buttons refer to the cards (see faq component in views) with the same number. Cards receive content in English and German
            // and the language is selected in the main menu
            // btn and card are required for jquery in the questions blade (consider refactoring)
            'btn1' => "btn1",
            'card1' => "card1",
            'btn2' => "btn2",
            'card2' => "card2",
            'btn3' => "btn3",
            'card3' => "card3",
            'btn4' => "btn4",
            'card4' => "card4",

            'btn5' => "btn5",
            'card5' => "card5",
            'btn6' => "btn6",
            'card6' => "card6",
            'btn7' => "btn7",
            'card7' => "card7",
        ];
    }
}

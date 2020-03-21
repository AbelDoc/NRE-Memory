    
    /**
     * @file NRE_MemoryManager.hpp
     * @brief Declaration of Memory's API's Object : MemoryManager
     * @author Louis ABEL
     * @date 21/03/2020
     * @copyright CC-BY-NC-SA
     */
    
    #pragma once
    
    #include <algorithm>
    #include <Utility/Singleton/NRE_Singleton.hpp>
    #include <Utility/Detail/Vector/NRE_Vector.hpp>
    #include "../Allocator/NRE_DirectAllocator.hpp"
    
    /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace Memory
         * @brief Memory's API
         */
        namespace Memory {
            
            /**
             * @class MemoryManager
             * @brief Store current allocated memory and tell if any memory leak occurs
             */
            class MemoryManager  : public Utility::Singleton<MemoryManager> {
                friend class Singleton<MemoryManager>;
                private:    // Fields
                    Utility::Detail::Vector<void*, DirectAllocator<void*>> allocated;   /**< Store all allocated pointer */
        
                public :    // Methods
                    /**
                     * Store a memory pointer
                     * @param data the pointer to memory
                     */
                    template <class T>
                    void storeMemory(T* data) {
                        allocated.emplaceBack(data);
                    }
                    /**
                     * Remove a memory pointer
                     * @param data the pointer to memory
                     */
                    template <class T>
                    void removeMemory(T* data) {
                        allocated.erase(std::remove(allocated.begin(), allocated.end(), data), allocated.end());
                    }
        
                private:   // Methods
                    //## Constructor ##//
                    /**
                     * Default constructor
                     */
                    MemoryManager() = default;
            
                    //## Deconstructor ##//
                    /**
                     * MemoryManager Deconstructor
                     */
                    ~MemoryManager() {
                        for (void* p : allocated) {
                            std::cout << "Memory at : " << p << " has not been freed !" << std::endl;
                            std::cout << "Deallocating now, but can't call deconstructor !" << std::endl;
                            free(p);
                        }
                    }
            };
            
        }
    }

    #ifdef NRE_USE_MEMORY_MANAGER
        void* operator new(std::size_t size) {
            void* data = malloc(size);
            if (!data) {
                throw std::bad_alloc();
            }
            NRE::Utility::Singleton<NRE::Memory::MemoryManager>::get().storeMemory(data);
            return data;
        }
        
        void operator delete(void* p) {
            NRE::Utility::Singleton<NRE::Memory::MemoryManager>::get().removeMemory(p);
            free(p);
            p = nullptr;
        }
        
        void operator delete(void* p, std::size_t) {
            NRE::Utility::Singleton<NRE::Memory::MemoryManager>::get().removeMemory(p);
            free(p);
            p = nullptr;
        }
    #endif